<?php session_start();

require 'pdo-admin.php';

$reqNbUser = $bdd->prepare("SELECT COUNT(DISTINCT id_user) AS NbUsers FROM users");
$reqNbUser->execute();
$Nb = $reqNbUser->fetch();


if (isset($_GET['id'])) 
{
  $getId = intval($_GET['id']); // Convert the entry into a number
  $Nb = intval($Nb->NbUsers); // Convert the entry into a number
  $Nb = $Nb+3; // To fill in the deleted lines

  if ($getId <= $Nb)
  {
      $reqUser = $bdd->prepare("SELECT * FROM users WHERE id_user = :getId");
      $reqUser->bindParam(':getId', $getId);
      $reqUser->execute();
      $userInfo = $reqUser->fetch();
      require_once 'reference-admin.php';
      }
      else
      {
      header("Location: login.php");
  }
}
else
{
  header("Location: login.php");
}

?>


