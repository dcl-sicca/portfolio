<?php require 'model/pdo-admin.php';
// check form
if (isset($_POST['formSubscriber']))
{
    $message=null;  
    $firstname = ($_POST['firstname']);
    $name = ($_POST['name']);
    $login = ($_POST['login']);
    $pseudo = ($_POST['pseudo']);
    $email = ($_POST['email']);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $avatar = ($_POST['avatar']);
    include 'model/add-user.php';
    $reqInsert->execute(array(
      'firstname' => $firstname,
      'name' => $name,    
      'login' => $login,
      'pseudo' => $pseudo,
      'email' => $email,
      'password' => $password,
      'avatar' => $avatar,
      'id_role' => 1
      ));
          if (!empty($_POST['login']) && !empty($_POST['password']))
          {
            $login = $_POST['login'];
            $password = $_POST['password'];
            include 'model/req-user.php';
            $stmt->bindParam(':login', $login);
            $stmt->execute();
            $result = $stmt->fetch();
              if (password_verify($password, $result->user_password))
              {
                  session_start();
                  $_SESSION['id'] = $result->id_user;
                  $_SESSION['login'] = $result->user_login;
                  $_SESSION['avatar'] = $result->user_avatar;
                  $_SESSION['pseudo'] = $result->user_pseudo;
                  $_SESSION['role_name'] = $result->role_name;
                  $_SESSION['role_status'] = $result->role_status;
        
                  header("Location: index.php?id=" . $_SESSION['id']);
              }
              else
              {
                  $message = "Mail erroné !";
              }
          }
}
else
{
  $message=' ';
}
require_once 'views/register.html.php';
