<?php
$reqUser = $bdd->prepare("SELECT * FROM users NATURAL JOIN role WHERE id_user = :getId");
?>