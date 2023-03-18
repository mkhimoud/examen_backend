<?php
// paramètres de connexion à la base de donnée
    $user='root';
    $password='';
    $dbname='formulaire';
    $host='localhost';
    $driver= 'mysql';

    try {
        // connection a la base de donnée 
        $dbh = new PDO("$driver:host=$host;dbname=$dbname", $user, $password);
    } catch (\PDOException $error) {
        // retour des messages d'erreurs
        echo "error: " . $error->getMessage();
        die;
    }
?>