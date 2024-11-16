<!--  
    Ce script a pour but de vérifier les informations renseignées par l'utilisateur dans la page "contact.php".
-->

<?php

require_once(__DIR__."/header.php");
require_once(__DIR__."/../config/databaseconnect.php");

$postData = array_map('htmlspecialchars', $_POST);  // On récupère les infos dans la superglobale $_POST (nom, prénom, mail etc.. )

if (   trim($postData['prenom']) === ''  
    || trim($postData['nom']) === ''
    || trim($postData['message']) === '' )           // Vérifie que le prénom, le nom et le message ne contienent pas que des espaces
    {
        echo('Veuillez entrez des données valides.');
        return;
    }

$currentDateTime = date('Y-m-d H:i:s');

// On ajoute les infos dans la base de données
$sqlQuery = 'INSERT INTO contact(prenom,nom,email,message,date) VALUES (:prenom, :nom, :email, :message, :date)';
$insertContact = $mysqlClient->prepare($sqlQuery);
$insertContact->execute([
    'prenom' => $postData["prenom"],
    'nom' => $postData["nom"],
    'email' => $postData["email"],
    'message' => $postData["message"],
    'date' => $currentDateTime,
    ]);

    // Coder un envoi de mail vers la boite du salarié de la mdr

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