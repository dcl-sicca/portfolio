<?php require_once 'model/pdo-admin.php';
$message = null;

if (isset($_POST['formConnexion'])) {

  if (!empty($_POST['login']) && !empty($_POST['password']))
  {
    // Check if the login exists
    $login = $_POST['login'];
    $password = $_POST['password'];
    include 'model/req-user.php';

      $stmt->bindParam(':login', $login);
      $stmt->execute();
      $result = $stmt->fetch();

    // Vérifier le double mot de passe
    // Vérifier si le login existe

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
          $message = "Vos identifiants sont incorrects !";
      }
  }
}
require_once 'views/login.html.php';
