<?php session_start();

include("pdo-admin.php");

if (isset($_GET['id']))
{
$getId = intval($_GET['id']); // Convert the entry into a number
$reqUser = $bdd->prepare("SELECT * FROM users WHERE id_user = ?");
$reqUser->execute(array($getId));
$userInfo = $reqUser->fetch();
}
else
{
$userInfo=0;
}

// If session id = id_users then the nickname is displayed
if (isset($_SESSION['id']) AND $userInfo->id_user == $_SESSION['id'])
{
$pseudoUser = $userInfo->user_pseudo;
}
else 
{
$pseudoUser = 'Inconnu';
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

  <title>Admin Sicca-Area</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>



<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

<?php include ("sidebar.php") ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

          <!-- Topbar -->
          <?php include("topbar.php"); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Mon Profil</h1>
          </div>

            <!-- -------------------------------- Content --------------------------------------- -->

            <div class="col-xl-12 col-lg-7">
                    <?php
                    // On récupère le membre
                    $reqStatut = $bdd->prepare ('SELECT * 
                    FROM users,role
                    WHERE users.id_role = role.id_role
                    AND id_user = ?');

                    $userStatut = null;

                    if (isset($_GET['id']))
                    {
                        $getId = intval($_GET['id']);
                        $reqStatut->execute(array($getId));
                        $userStatut = $reqStatut->fetch();
                    }

                    ?>
                    <?php
                        if (isset($_SESSION['id']) AND $userInfo->id_user == $_SESSION['id'])
                        {

                                ?>
                                <!-- Profil -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"><?php echo $userStatut->user_pseudo; ?></h6>
                                    </div>
                                    <div class="card-body">
                                    <p>
                                <div>
                                <img src="../img/avatar/<?php echo $userStatut->user_avatar; ?>.jpg" alt="">

                                <p class="lead text-muted">
                                <b>Login : </b><?php echo $userStatut->user_login; ?><br>
                                <b>Pseudo : </b><?php echo $userStatut->user_pseudo; ?><br>
                                <b>Nom : </b><?php echo $userStatut->user_name; ?><br>
                                <b>Email : </b><?php echo $userStatut->user_email; ?><br>
                                <b>Rôle : </b><?php echo $userStatut->role_name; ?><br>
                                </p>
                                <p>
                                    <a href="modif-profil.php?id=<?php echo $_SESSION['id'];?>" class="btn btn-primary my-2">Modifier votre profil</a>
                                    <a href="#" class="btn btn-secondary my-2">Modifier votre mot de passe</a>
                                </p>
                                </div>

                            <?php
                        }
                        else 
                        {
                            ?>
                        <!-- Profil -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><?php echo $userStatut['pseudo_users']; ?></h6>
                            </div>
                            <div class="card-body">
                            <p>
                        <div>

                        <p class="lead text-muted">
                        Vous êtes Deconnecté
                        </p>
                        <p>
                            <a href="modif-profil.php?id=<?php echo $_SESSION['id'];?>" class="btn btn-primary my-2">Modifier votre profil</a>
                            <a href="#" class="btn btn-secondary my-2">Modifier votre mot de passe</a>
                        </p>
                        </div>

                        <?php
                        }
                        ?>    

                    </p>
                    </div>
                </div> 
              
            </div> 
        </div>

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Sicca-Area 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php include("logout-modal.php");?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
