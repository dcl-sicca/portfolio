<?php session_start();
require 'model/pdo-admin.php';

if (isset($_GET['id'])) 
{
  $getId = intval($_GET['id']); // Convert the entry into a number
  include 'model/req-user-id.php';
  $reqUser->bindParam(':getId', $getId);
  $reqUser->execute();
  $userInfo = $reqUser->fetch();

    if ($userInfo != false)
    {
        if (isset($_SESSION['id']) AND $userInfo->id_user === $_SESSION['id'] && ($_SESSION['role_status']) !== '1')
        {
          $id_credentials=$_GET['id_credentials'];  
          require_once 'views/upCredential.html.php';
        }
        elseif (isset($_SESSION['id']) AND $userInfo->id_user === $_SESSION['id'] && ($_SESSION['role_status']) == '1')
        {
            require_once 'views/index-subscriber.html.php';
        }
        else 
        {
            header("Location: login.php");
        }  
      $reqUser->closeCursor();     
    }
    else
    {
      header("Location: login.php");
    }
  $reqUser->closeCursor();
}
else
{
  header("Location: login.php");
}


