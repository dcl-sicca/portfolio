<?php session_start();
require 'model/pdo-admin.php';

require_once 'model/req-nbuser.php';

if (isset($_GET['id'])) 
{
  $getId = intval($_GET['id']); // Convert the entry into a number
  $Nb = intval($Nb->NbUsers); // Convert the entry into a number
  $Nb = $Nb+6; // To fill in the deleted lines

  if ($getId <= $Nb)
  {
      include 'model/req-user-id.php';
      require_once 'views/profil.html.php';
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