<?php

try {
$json =file_get_contents('pdo.JSON');
$dec=json_decode($json, true);

$bdd=new PDO("mysql:host=".$dec['host'].";dbname=".$dec['dbName'], $dec['user'] , $dec['pass']);
//stock url 51.254.203.143
$bdd->exec('SET NAMES utf8');
    
// echo 'Connexion OK';
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>


<? 

