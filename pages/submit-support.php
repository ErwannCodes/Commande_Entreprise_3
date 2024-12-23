<!--  Ce script a pour but de vérifier les informations renseignées par l'utilisateur dans la page "support.php". -->

<?php
session_start();

require_once(__DIR__."/header.php");

if (!isset($_POST['csrf_token_support']) || $_POST['csrf_token_support'] !== $_SESSION['csrf_token_support']) {      // Vérification csrf
    die("Invalid CSRF token.");
}

$postData = array_map('htmlspecialchars', $_POST);                              // On récupère les infos dans la superglobale $_POST (nom, prénom, mail etc.. )

if(isset($postData["type"]) && $postData["type"]==="Adhésion simple personne morale"){
    $required = true;
}else {
    $required =false;
}

$validationRules = [
    'first_name' => [
        'required' => true,
        'regex' => "/^[a-zA-ZéèàùâêîôûäëïöüÀ-ÿ\s\-']+$/",
        'max_length' => 50,
        'error_messages' => [
            'required' => "Le prénom est requis.",
            'regex' => "Le prénom ne doit contenir que des lettres.",
            'max_length' => "Le prénom ne doit pas dépasser 50 caractères."
        ],
    ],
    'last_name' => [
        'required' => true,
        'regex' => "/^[a-zA-ZéèàùâêîôûäëïöüÀ-ÿ\s\-']+$/",
        'max_length' => 50,
        'error_messages' => [
            'required' => "Le nom est requis.",
            'regex' => "Le nom ne doit contenir que des lettres.",
            'max_length' => "Le nom ne doit pas dépasser 50 caractères."
        ],
    ],
    'email' => [
        'required' => true,
        'filter' => FILTER_VALIDATE_EMAIL,
        'max_length' => 100,
        'error_messages' => [
            'required' => "L'email est requis.",
            'filter' => "L'adresse email est invalide.",
            'max_length' => "L'email ne doit pas dépasser 100 caractères."
        ],
    ],
    'structure_name' => [
        'required' => !$required,                                    // N'est requis que pour le cas d'un formulaire d'association ou d'entreprise 
        'regex' => "/^[a-zA-Z0-9éèàùâêîôûäëïöüÀ-ÿ\s\-'&]+$/",
        'max_length' => 100,
        'error_messages' => [
            'required' => "Veuillez remplir ce champ.",
            'regex' => "Le nom de la structure n'est pas valide. Il doit contenir uniquement des lettres, des chiffres, des espaces, des tirets, des apostrophes et des caractères comme '&'.",
            'max_length' => "Le nom de la structure ne doit pas dépasser 100 caractères."
        ],
    ],
    'adress' => [
        'required' => true,
        'regex' => "/^[a-zA-Z0-9éèàùâêîôûäëïöüÀ-ÿ\s\-'\.]+$/",
        'max_length' => 100,
        'error_messages' => [
            'required' => "Veuillez remplir ce champ.",
            'regex' => "L'adresse n'est pas valide. Elle doit contenir uniquement des lettres, des chiffres, des espaces, des tirets, des apostrophes et des points.",
            'max_length' => "L'adresse ne doit pas dépasser 100 caractères."
        ],
    ],
    'postal_code' => [
        'required' => true,
        'regex' => "/^[0-9]{5}$/",
        'error_messages' => [
            'required' => "Veuillez remplir ce champ.",
            'regex' => "Le code postal n'est pas valide. Il doit comporter 5 chiffres."
        ],
    ],
    'city' => [
        'required' => true,
        'regex' => "/^[a-zA-ZéèàùâêîôûäëïöüÀ-ÿ\s\-]+$/",
        'max_length' => 64,
        'error_messages' => [
            'required' => "Veuillez remplir ce champ.",
            'regex' => "Le nom de la ville n'est pas valide. Il doit contenir uniquement des lettres, des espaces et des tirets.",
            'max_length' => "Le nom de la ville ne doit pas dépasser 64 caractères."
        ],
    ],
    'phone' => [
        'required' => true,
        'regex' => "/^[0-9]{10}$/",
        'error_messages' => [
            'required' => "Veuillez remplir ce champ.",
            'regex' => "Le numéro de téléphone n'est pas valide. Il doit comporter 10 chiffres."
        ],
    ],
    'occupation' => [
        'required' => $required,                             // N'est requis que pour un formulaire de personne morale
        'regex' => "/^[a-zA-Z0-9éèàùâêîôûäëïöüÀ-ÿ\s\-'&]+$/",
        'max_length' => 50,
        'error_messages' => [
            'required' => "Veuillez remplir ce champ.",
            'regex' => "La profession n'est pas valide. Elle doit contenir uniquement des lettres, des chiffres, des espaces, des tirets, des apostrophes et des caractères comme '&'.",
            'max_length' => "La profession ne doit pas dépasser 50 caractères."
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
    $_SESSION['errorsSupport'] = $errors;          // Permet de passer les erreurs à la page "support.php"
    $_SESSION['postedDataSupport'] = $postData;     // Stocker les données du formulaire pour les reremplir après
    header("Location: support.php");      // Recharge la même page
    exit;
}

$currentDateTime = date('Y-m-d H:i:s');

$valueStructure = $postData['structure_name'] ?? null;
$valueOccupation = $postData['occupation'] ?? null;

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/footer.css">
        <!-- External Fonts and Icons -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<style>
    /* Section globale */
    body {
        font-family: 'Host Grotesk', sans-serif;
        color: #333; 
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        flex: 1;
    }

    .message {
        background-image: url('/assets/images/maison-riviere.jpg');
        background-size: cover; 
        background-position: center; 
        background-repeat: no-repeat;
        flex-direction: column;
        justify-content: center; /* Centre verticalement */
        align-items: center; /* Centre horizontalement */
        height: 100vh; /* Prend toute la hauteur de la fenêtre */
        display: flex;
    }

    /* Titre */
    .title {
        font-size: 2.5rem;
        font-weight: 700; 
        margin-bottom: 20px;
        line-height: 1.2;
    }

    /* Sous-titre */
    .subtitle {
        font-size: 1.2rem;
        font-weight: 400;
        line-height: 1.6;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .title {
            font-size: 2rem;
        }

        .subtitle {
            font-size: 1rem;
        }
    }
</style> 

<body>
    <div class="message">
        <p class="title">Message bien reçu !</p>
        <p class="subtitle">Nous vous ferons un retour dès que possible !</span></p>
    </div>
</body>

<?php require_once(__DIR__.'/footer.php'); ?>

</html>