<?php 
$reqInsert = $bdd->prepare('INSERT INTO users
(user_firstname, user_name, user_login, user_pseudo, user_email, user_password, user_avatar, id_role) 
VALUES (:firstname, :name, :login, :pseudo, :email, :password, :avatar, :id_role)');