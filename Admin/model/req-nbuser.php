<?php
$reqNbUser = $bdd->prepare("SELECT COUNT(DISTINCT id_user) AS NbUsers FROM users");
$reqNbUser->execute();
$Nb = $reqNbUser->fetch();
?>