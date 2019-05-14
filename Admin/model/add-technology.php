<?php
$reqTech = $bdd->prepare('INSERT INTO have
(id_technology, id_credentials) 
VALUES (:id_technology, :id_credentials)');