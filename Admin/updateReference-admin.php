<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'sidebar.php';?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include 'topbar.php'; ?>
        <!-- End of Topbar -->




        <!-- Begin Page Content -->
        <div class="container-fluid">
          <?php
          if (isset($_SESSION['id']) AND $userInfo->id_user === $_SESSION['id'] && ($_SESSION['role_status']) !== '1')
          {

          $id_credentials=$_GET['id_credentials'];
          ?>

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Modifier la réference n°<?php echo $id_credentials;?></h1>
          <?php
              // bdd preparation of the request references
              $req = $bdd->prepare('SELECT * FROM credentials NATURAL JOIN users');
              $req -> execute();
          ?>
            

          Admin

          <?php
          }
          elseif (isset($_SESSION['id']) AND $userInfo->id_user === $_SESSION['id'] && ($_SESSION['role_status']) == '1')
          {
          ?>
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Bienvenue</h1>

          Bienvenue Abonné !

          <?php
          }
          elseif (isset($_SESSION['id']) AND $userInfo->id_user != $_SESSION['id'])
          {
          ?>
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Bienvenue</h1>
          Petit Malin !
          <?php
          }
          else 
          {
          ?>
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Bienvenue</h1>       
          Vous êtes deconnecté !
          <?php           
          }
          ?>  



        </div>
        <!-- /.container-fluid -->

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
  <?php include "logout-modal.php"; ?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>