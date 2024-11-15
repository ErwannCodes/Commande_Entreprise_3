<!--  
    Ce script a pour but de vérifier les informations renseignées par l'utilisateur dans la page "support.php".
-->

<?php

require_once(__DIR__."/header.php");
require_once(__DIR__."/../config/databaseconnect.php");

$postData = array_map('htmlspecialchars', $_POST);  // On récupère les infos dans la superglobale $_POST (nom, prénom, mail etc.. )
var_dump($postData);

foreach($postData as $key => $value){              // Permet de s'assurer que les informations entrées pas l'utilisateur sont exploitables.
    if (trim($value)===""){
        echo("Veuillez remplir chaque case.");
        exit;
    }
}


if ($postData['structure_name'] != null && !preg_match("/^[a-zA-Z0-9éèàùâêîôûäëïöüÀ-ÿ\s\-'&]+$/", $postData['structure_name'])) {
    echo "Le nom de la structure n'est pas valide. Il doit contenir uniquement des lettres, des chiffres, des espaces, des tirets, des apostrophes et des caractères comme '&'.";
    exit;
}

if (!preg_match("/^[a-zA-ZéèàùâêîôûäëïöüÀ-ÿ\s\-']+$/", $postData['first_name']) || !preg_match("/^[a-zA-ZéèàùâêîôûäëïöüÀ-ÿ\s\-' ]+$/", $postData['last_name'])) {
    echo "Le prénom et le nom de famille ne doivent contenir que des lettres.";
    exit;
}

if (!preg_match("/^[a-zA-Z0-9éèàùâêîôûäëïöüÀ-ÿ\s\-'\.]+$/", $postData['adress'])) {
    echo "L'adresse n'est pas valide. Elle doit contenir uniquement des lettres, des chiffres, des espaces, des tirets, des apostrophes et des points.";
    exit;
}

if (!preg_match("/^[0-9]{5}$/", $postData['postal_code'])) {
    echo "Le code postal n'est pas valide. Il doit comporter 5 chiffres.";
    exit;
}

if (!preg_match("/^[a-zA-ZéèàùâêîôûäëïöüÀ-ÿ\s-]+$/", $postData['city'])) {
    echo "Le nom de la ville n'est pas valide. Il doit contenir uniquement des lettres, des espaces et des tirets.";
    exit;
}

if (!preg_match("/^[0-9]{10}$/", $postData['phone'])) {
    echo "Le numéro de téléphone n'est pas valide. Il doit comporter 10 chiffres.";
    exit;
}

if (!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse e-mail est invalide.";
    exit;
}

if ($postData['occupation'] != null && !preg_match("/^[a-zA-Z0-9éèàùâêîôûäëïöüÀ-ÿ\s\-'&]+$/", $postData['occupation'])) {
    echo "La profession n'est pas valide. Elle doit contenir uniquement des lettres, des chiffres, des espaces, des tirets, des apostrophes et des caractères comme '&'.";
    exit;
}

$currentDateTime = date('Y-m-d H:i:s');

if ($postData["type"]==="Adhésion simple personne morale"){         // S'il s'agit d'une inscription en tant que "simple personne morale"
    $sqlQuery = 'INSERT INTO membership(type, first_name, last_name, adress, postal_code, city, phone, email, occupation, date) VALUES (:type, :first_name, :last_name, :adress, :postal_code, :city, :phone, :email, :occupation, :date)';
    $insertMembership = $mysqlClient->prepare($sqlQuery);
    $insertMembership->execute([
        'type' => $postData['type'],
        'first_name' => $postData["first_name"],
        'last_name' => $postData["last_name"],
        'adress' => $postData["adress"],
        'postal_code' => $postData["postal_code"],
        'city' => $postData["city"],
        'phone' => $postData["phone"],
        'email' => $postData["email"],
        'occupation' => $postData["occupation"],
        'date' => $currentDateTime,
        ]);
} else {                      // Sinon on rjaoute le champ "structure_name" et on enlève "occupation"
    $sqlQuery = 'INSERT INTO membership(type, structure_name, first_name, last_name, adress, postal_code, city, phone, email, date) VALUES (:type, :structure_name, :first_name, :last_name, :adress, :postal_code, :city, :phone, :email, :date)';
    $insertMembership = $mysqlClient->prepare($sqlQuery);
    $insertMembership->execute([
        'type' => $postData['type'],
        'structure_name' => $postData["structure_name"],
        'first_name' => $postData["first_name"],
        'last_name' => $postData["last_name"],
        'adress' => $postData["adress"],
        'postal_code' => $postData["postal_code"],
        'city' => $postData["city"],
        'phone' => $postData["phone"],
        'email' => $postData["email"],
        'date' => $currentDateTime,
        ]);

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