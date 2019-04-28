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

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Ajouter une référence</h1>

         <?php
         if (isset($_SESSION['id']) AND $userInfo->id_user === $_SESSION['id'] && ($_SESSION['role_status']) !== '1')
         {
         ?> 

               <form class="user" action="" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="firstname" placeholder="Nom Référence">
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

                <div class="row custom-control custom-radio custom-control-inline ">              
                  <div class="col-auto col-sm mb-3 mr-4 mb-sm-0 ">
                      <input type="radio" class="custom-control-input" id="customRadio" name="avatar" value="sicca" checked>
                      <label class="custom-control-label" for="customRadio"><img class="avatar" src="../img/avatar/sicca.jpg" alt="Sicca"></label>
                  </div> 
                  <div class="col col-sm mb-3">
                      <input type="radio" class="custom-control-input" id="customRadio2" name="avatar" value="sicca-contributor">
                      <label class="custom-control-label" for="customRadio2"><img class="avatar" src="../img/avatar/sicca-contributor.jpg" alt="Empty"></label>
                  </div>
                </div>
                <div class="row custom-control custom-radio custom-control-inline">  
                  <div class="col-auto col-sm mb-3 mr-4 mb-sm-0">
                      <input type="radio" class="custom-control-input" id="customRadio3" name="avatar" value="sicca-corrector">
                      <label class="custom-control-label" for="customRadio3"><img class="avatar" src="../img/avatar/sicca-corrector.jpg" alt="Empty"></label>
                  </div>
                  <div class="col col-sm mb-3">
                      <input type="radio" class="custom-control-input" id="customRadio4" name="avatar" value="empty">
                      <label class="custom-control-label" for="customRadio4"><img class="avatar" src="../img/avatar/empty.jpg" alt="Empty"></label>
                  </div>
                </div>
  
                <input type="submit" class="btn btn-primary btn-user btn-block" name="formSubscriber" value="Valider">
               </form>

         <?php
         }
         elseif (isset($_SESSION['id']) AND $userInfo->id_user === $_SESSION['id'] && ($_SESSION['role_status']) == '1')
         {
         ?>
         Bienvenue Abonné !

         <?php
         }
         elseif (isset($_SESSION['id']) AND $userInfo->id_user != $_SESSION['id'])
         {
         ?>
         Petit Malin !
         <?php
         }
         else 
         {
         ?>        
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