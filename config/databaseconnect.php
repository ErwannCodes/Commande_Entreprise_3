<!--
    Ce script permet de se connecter à la base de données, 
    Elle vérifie également s'il y a des erreurs ou non.
-->

<?php
//Importation des pages php nécessaires ( on récupère les paramètres de connexion à la BDD )
require_once(__DIR__ . '/mysql.php');

try {
    //connexion à SQL
    $mysqlClient = new PDO(
        sprintf('mysql:host=%s;dbname=%s;port=%s;charset=utf8', MYSQL_HOST, MYSQL_NAME, MYSQL_PORT),
        MYSQL_USER,
        MYSQL_PASSWORD
    );
    $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    
catch (Exception $exception) {
    //s'il y a une erreur, on l'affiche et on arrête le code
    die('Erreur : ' . $exception->getMessage());
    }
?>