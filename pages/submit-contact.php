<!--  
    Ce script a pour but de vérifier les informations renseignées par l'utilisateur dans la page "contact.php".
-->

<?php
session_start();

require_once(__DIR__."/header.php");

if (!isset($_POST['csrf_token_contact']) || $_POST['csrf_token_contact'] !== $_SESSION['csrf_token_contact']) {      // Vérification CSRF
    die("Une erreur est survenue, veuillez réessayer plus tard.");
}

$postData = $_POST;  // On récupère les infos dans la superglobale $_POST (nom, prénom, mail etc.. )

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
        'regex' => "/^[a-zA-Z0-9\s.,!?€=+;:\'()#$%^*+\-=&]+$/",
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
$postData = array_map('htmlspecialchars', $postData);

if(!empty($errors)){
    $_SESSION['errorsContact'] = $errors;             // Permet de passer les erreurs à la page "support.php"
    $_SESSION['postedDataContact'] = $postData;      // Stocker les données du formulaire pour les reremplir après
    header("Location: contact.php");                // Recharge la même page
    exit;
} else {
    $currentDateTime = date('d F Y à H:i');

    require_once '../vendor/autoload.php';
    $emetteur = require 'email/mailsupport.php';     // Mail du support
    $password = require 'email/mdpsupport.php';         // Mdp du mail du support
    $destinataires = require 'email/destinataires.php';  // Mail des modérateurs susceptibles de répondre au mail
    
    $transport = (new Swift_SmtpTransport('z.imt.fr', 587))  // Création de l'instance SMTP
        ->setUsername($emetteur)
        ->setPassword($password)
        ->setEncryption('tls');

    $mailer = new Swift_Mailer($transport);

    $message = (new Swift_Message('Question'))
    ->setFrom([$emetteur => 'Support Maison De La Rivière'])
    ->setTo([$destinataires => 'Modérateurs'])
    ->setBody('
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <title>Question au support</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                    background-size: cover;
                    background-position: center;
                    color: #333;
                    padding: 2rem;
                }

                .main-section {
                    max-width: 600px;
                    margin: 2rem auto;
                    background-color: rgba(255, 255, 255, 0.9);
                    border-radius: 10px;
                    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
                    padding: 2rem;
                }

                .page-header {
                    text-align: center;
                    padding: 1rem 0;
                    background-color: #1E3A2B;
                    color: white;
                    border-radius: 10px 10px 0 0;
                }

                .page-header h1 {
                    font-size: 1.8rem;
                    margin: 0;
                }

                .introduction, .message {
                    margin: 1rem 0;
                    font-size: 1rem;
                    line-height: 1.6;
                }

                .introduction strong {
                    color: #1E3A2B;
                }

                .message {
                    background-color: #f1f1f1;
                    padding: 1.5rem;
                    border: 1px solid #ddd;
                    border-radius: 5px;
                    font-style: italic;
                }

                /* Responsiveness */
                @media (max-width: 768px) {
                    .main-section {
                        padding: 1rem;
                    }
                    .page-header h1 {
                        font-size: 1.5rem;
                    }
                }
            </style>
        </head>
        <body>
            <div class="main-section">
                <header class="page-header">
                    <h1>Nouveau message reçu !</h1>
                </header>
                <p class="introduction">
                    Le '.$currentDateTime.', <strong>' . htmlspecialchars($postData["first_name"]) . ' ' . htmlspecialchars($postData["last_name"]) . '</strong>
                    vous a laissé un message :
                </p>
                <p class="message">
                    ' . nl2br(htmlspecialchars($postData["message"])) . '
                </p>
                <p class="introduction">
                    Vous pourrez répondre à cette personne à l\'adresse suivante :
                    <strong>' . htmlspecialchars($postData["email"]) . '</strong>.
                </p>
            </div>
        </body>
        </html>
    ', 'text/html')

    ->addPart('');

    $result = $mailer->send($message);      // Envoi du mail
}



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation d'envoi du message</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/footer.css">

    <style>
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

        .title {
            font-size: 2.5rem;
            font-weight: 700; 
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .subtitle {
            font-size: 1.2rem;
            font-weight: 400;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .title {
                font-size: 2rem;
            }

            .subtitle {
                font-size: 1rem;
            }
        }
    </style> 
</head>

<body>
    <div class="message">
        <p class="title">Message bien reçu !</p>
        <p class="subtitle">Nous vous ferons un retour dès que possible !</p>
    </div>
</body>

<footer>
    <?php require_once(__DIR__."/footer.php"); ?>
</footer>

</html>