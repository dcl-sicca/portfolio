<?php
$reqPosition = $bdd->prepare("SELECT * FROM credentials WHERE credentials_position = :getPosition");
?>