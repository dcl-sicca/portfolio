<?php
try {
        $json =file_get_contents('model/pdo-admin.JSON');
        $dec=json_decode($json, true);

        $bdd=new PDO("mysql:host=".$dec['host'].";dbname=".$dec['dbName'], $dec['user'] , $dec['pass']);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        $bdd->exec('SET NAMES utf8');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


