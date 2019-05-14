<?php
$reqTech1 = $bdd->prepare('INSERT INTO have
(id_technology, id_credentials) 
VALUES (:id_technology, :id_credentials)');