<!--  
    Ce script a pour but de vérifier les informations renseignées par l'utilisateur dans la page "contact.php".
-->

<?php
session_start();

require_once(__DIR__."/header.php");
require_once(__DIR__."/../config/databaseconnect.php");

if (!isset($_POST['csrf_token_contact']) || $_POST['csrf_token_contact'] !== $_SESSION['csrf_token_contact']) {      // Vérification CSRF
    die("Une erreur est survenue, veuillez réessayer plus tard.");
}

$postData = array_map('htmlspecialchars', $_POST);  // On récupère les infos dans la superglobale $_POST (nom, prénom, mail etc.. )

$validationRules = [
    'first_name' => [
        'required' => true,
        'regex' => "/^[a-zA-ZéèàùâêîôûäëïöüÀ-ÿ\s\-']+$/",
        'max_length' => 64,
        'error_messages' => [
            'required' => "Le prénom est requis.",
            'regex' => "Le prénom ne doit contenir que des lettres.",
            'max_length' => "Le prénom est trop long."
        ],
    ],
    'last_name' => [
        'required' => true,
        'regex' => "/^[a-zA-ZéèàùâêîôûäëïöüÀ-ÿ\s\-']+$/",
        'max_length' => 64,
        'error_messages' => [
            'required' => "Le nom est requis.",
            'regex' => "Le nom ne doit contenir que des lettres.",
            'max_length' => "Le nom est trop long."
        ],
    ],
    'email' => [
        'required' => true,
        'filter' => FILTER_VALIDATE_EMAIL,
        'max_length' => 128,
        'error_messages' => [
            'required' => "L'email est requis.",
            'filter' => "L'adresse email est invalide.",
            'max_length' => "L'email est trop long."
        ],
    ],
    'message' => [
        'required' => true,
        'regex' => "/^[a-zA-Z0-9éèàùâêîôûäëïöüÀ-ÿ\s\-'\.]+$/",
        'max_length' => 512,
        'error_messages' => [
            'required' => "Le message est requis.",
            'regex' => "Le message ne doit contenir que des lettres, des chiffres ou des caractères classiques",
            'max_length' => "Le message est trop long."
        ],
    ],
    
];


function validateInput(&$data, $rules) {   // Fonction générique qui va vérifier toutes les données entrées par l'utilisateur
    $errors = [];
    $data = array_map('trim', $data);

    foreach ($rules as $field => $ruleSet) {
        
        if (isset($ruleSet['required']) && $ruleSet['required'] && empty($data[$field])) { // Si le champ est requis et qu'il n'est pas renseigné :
            $errors[$field] = $ruleSet['error_messages']['required'];
            continue;
        }

        if (!empty($data[$field])) {
            if (isset($ruleSet['regex']) && !preg_match($ruleSet['regex'], $data[$field])) {  // Vérification de la regex
                $errors[$field] = $ruleSet['error_messages']['regex'];
            }
            if (isset($ruleSet['filter']) && !filter_var($data[$field], $ruleSet['filter'])) {  // Vérification du filtre ( pour le mail notament )
                $errors[$field] = $ruleSet['error_messages']['filter'];
            }
            if (isset($ruleSet['max_length']) && strlen($data[$field]) > $ruleSet['max_length']) {  // Vérification de la longueur maximale
                $errors[$field] = $ruleSet['error_messages']['max_length'];
            }
        }
    }

    return $errors;
}

$errors = validateInput($postData, $validationRules);

if(!empty($errors)){
    $_SESSION['errorsContact'] = $errors;           // Permet de passer les erreurs à la page "support.php"
    $_SESSION['postedDataContact'] = $postData;      // Stocker les données du formulaire pour les reremplir après
    header("Location: contact.php");              // Recharge la même page
    exit;
}

$currentDateTime = date('Y-m-d H:i:s');

try {
    $sqlQuery = 'INSERT INTO contact(first_name, last_name, email, message, date) VALUES (:first_name, :last_name, :email, :message, :date)';
    $insertContact = $mysqlClient->prepare($sqlQuery);
    $insertContact->execute([
        'first_name' => $postData["first_name"],
        'last_name' => $postData["last_name"],
        'email' => $postData["email"],
        'message' => $postData["message"],
        'date' => $currentDateTime,
        ]);
    $insertionERROR = null;

} catch (PDOException $exception) {
    $insertionERROR = $exception->getMessage();

    // Envoi de mail à mdr pour signaler le problème
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/submit-contact-style.css">
</head>

<body>
    <main>
        <section class="hero-section">
            <div class="hero-content">
                <p class="hero-title">Message bien reçu !</p>
                <p class="hero-subtitle">Nous vous ferons un retour dès que possible !</span></p>
            </div>
        </section>
    </main>
</body>


<footer>
    <?php require_once(__DIR__.'/footer.php'); ?>    <!-- PAS SECURISE, A MODIFIER -->
</footer>

</html>