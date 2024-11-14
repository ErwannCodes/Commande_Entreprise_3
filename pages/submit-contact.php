<!--  
    Ce script a pour but de vérifier les informations renseignées par l'utilisateur dans la page "contact.php".
-->

<?php

require_once(__DIR__."/header.php");
//require_once(__DIR__."/databaseconnect.php");

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
// $sqlQuery = 'INSERT INTO message(prenom,nom,email,message,date) VALUES (:prenom, :nom, :email, :message, :date)';
// $insertContact = $mysqlClient->prepare($sqlQuery);
// $insertContact->execute([
//     'prenom' => $postData["prenom"],
//     'nom' => $postData["nom"],
//     'email' => $postData["email"],
//     'message' => $postData["message"],
//     'date' => $currentDateTime,
//     ]);

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

        <h1> Message bien reçu ! </h1>
        <h2> Nous vous faisons un retour dès que possible !</h2>

        <div class="containeur">
            <a class="a" href="../index.php"> Retour à l'accueil</a>
        </div>

    </main>
</body>

<footer>
    <?php require_once(__DIR__.'/footer.php'); ?>    <!-- PAS SECURISE, A MODIFIER -->
</footer>

</html>