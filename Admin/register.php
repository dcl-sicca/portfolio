<?php session_start(); ?>
<?php include "pdo.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Inscription</h1>
              </div>
              <form class="user" action="" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="firstname" placeholder="Prénom">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="name" placeholder="Nom">
                  </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="login" placeholder="Login">
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="pseudo" placeholder="Pseudo">
                </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" placeholder="Email">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="password" placeholder="Mot de Passe">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="password2" placeholder="Répéter Mot de Passe">
                  </div>
                </div>
                <input type="submit" class="btn btn-primary btn-user btn-block" name="formSubscriber" value="Valider">
                
                
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.php">Mot de passe perdu ?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Vous avez déjà un compte ? Connectez-vous !</a>

                <?php
                $message = null;
  
                // check form
                if (isset($_POST['formSubscriber']))
                {
                    $firstname = ($_POST['firstname']);
                    $name = ($_POST['name']);
                    $login = ($_POST['login']);
                    $pseudo = ($_POST['pseudo']);
                    $email = ($_POST['email']);
                    // $password = ($_POST['password']);
                    // $password = password_hash('$password',PASSWORD_DEFAULT);
                    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
                    $avatar = 'empty';

                    $reqInsert = $bdd->prepare('INSERT INTO users
                    (firstname, name, login, pseudo, email, password, avatar, id_role_fk) 
                    VALUES (:firstname, :name, :login, :pseudo, :email, :password, :avatar, :id_role_fk)');

                    $reqInsert->execute(array(

                        'firstname' => $firstname,
                        'name' => $name,    
                        'login' => $login,
                        'pseudo' => $pseudo,
                        'email' => $email,
                        'password' => $password,
                        'avatar' => $avatar,
                        'id_role_fk' => 2
                        ));

                    echo 'Membre bien ajouté';

                }
                ?>
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
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
