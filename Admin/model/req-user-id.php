<?php
$reqUser = $bdd->prepare("SELECT * FROM users WHERE id_user = :getId");
$reqUser->bindParam(':getId', $getId);
$reqUser->execute();
$userInfo = $reqUser->fetch();
?>