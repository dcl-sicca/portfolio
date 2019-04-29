<?php require 'pdo-admin.php'; ?>
<?php
$message = null;

if (isset($_POST['formConnexion'])) {

  if (!empty($_POST['login']) && !empty($_POST['password']))
  {
    // Vérifier si le login existe
  
    $login = $_POST['login'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users NATURAL JOIN role WHERE user_login = :login";
    $stmt = $bdd->prepare($sql);
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
          $message = "Vos identifiants sont incorrects !";
      }
  }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sicca Area Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Connexion</h1>
                  </div>
                  <form class="user" action="" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="login" placeholder="Login">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Se souvenir de moi</label>
                      </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" name="formConnexion" value="Connexion">
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.php">Mot de passe oublié ?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.php">Créer un compte!</a>
                  </div>
                    <?php 
                    if ($message!=null) {
                        echo "<p>" . $message . "</p>"; 
                    }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js