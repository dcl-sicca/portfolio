<?php 
$reqInsert = $bdd->prepare('INSERT INTO credentials
(credentials_name, credentials_date, credentials_position, credentials_snap2, credentials_url, credentials_urltxt, credentials_description,id_user) 
VALUES (:name, :date, :position, :snap, :url, :urltxt, :description, :id_user)');