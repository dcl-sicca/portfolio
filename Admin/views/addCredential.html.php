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
  <link href="css/style.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php require_once 'sidebar.php';?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php require_once 'views/topbar.html.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Ajouter une référence</h1>

               <form class="user" action="" method="post" enctype="multipart/form-data">


                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="name" placeholder="Nom Référence" required>
                  </div>
                  <div class="col-sm-6">
                      <input class="form-control form-control-user" type="date" name="date" value="2019-01-01">
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <label for="pet-select">Position</label>
                      <select name="position">
                        <option value="">Position</option>

                        <?php 
                        include 'model/req-position.php';
                        for ($i=1; $i<101; $i++) {
                        
                        $reqPosition->bindParam(':getPosition', $i);
                        $reqPosition->execute();
                        $position = $reqPosition->fetch();
                        
                          if ($position == false) 
                          {
                            ?><option value="<?php echo($i);?>"><?php echo($i);?></option><?php
                          } else { 
        
                          }
                        }
                        ?>
                      </select>
                  </div>

                  <div class="col-sm-6">
                      <!-- <input type="file" class="form-control form-control-user" name="snap" placeholder="Capture écran"> -->
                      <input type="hidden" name="MAX_FILE_SIZE" value="2097152"> 
                      <p>Choisissez une photo avec une taille inférieure à 2 Mo.</p> 
                      <input type="file" name="photo">


                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <label for="technology1">Technologie 1</label>
                      <select name="technology1">
                        <option value="">Technologie</option>
                        <?php 
                        include 'model/req-technology.php';
                        $reqTech->execute();
                        while ($technology = $reqTech->fetch())
                        {
                            ?><option value="<?php echo($technology->id_technology);?>"><?php echo($technology->technology_name);?></option><?php
                        }
                        $reqTech->closeCursor();
                        ?>
                      </select>
                  </div>

                  <div class="col-sm-6">
                  <label for="technology2">Technologie 2</label>
                    <select name="technology2">
                      <option value="">Technologie</option>
                      <?php 
                      include 'model/req-technology.php';
                      $reqTech->execute();
                      while ($technology = $reqTech->fetch())
                      {
                          ?><option value="<?php echo($technology->id_technology);?>"><?php echo($technology->technology_name);?></option><?php
                      }
                      $reqTech->closeCursor();
                      ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <label for="technology3">Technologie 3</label>
                      <select name="technology3">
                        <option value="">Technologie</option>
                        <?php 
                        include 'model/req-technology.php';
                        $reqTech->execute();
                        while ($technology = $reqTech->fetch())
                        {
                            ?><option value="<?php echo($technology->id_technology);?>"><?php echo($technology->technology_name);?></option><?php
                        }
                        $reqTech->closeCursor();
                        ?>
                      </select>
                  </div>

                  <div class="col-sm-6">
                  <label for="technology4">Technologie 4</label>
                    <select name="technology4">
                      <option value="">Technologie</option>
                      <?php 
                      include 'model/req-technology.php';
                      $reqTech->execute();
                      while ($technology = $reqTech->fetch())
                      {
                          ?><option value="<?php echo($technology->id_technology);?>"><?php echo($technology->technology_name);?></option><?php
                      }
                      $reqTech->closeCursor();
                      ?>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="url" placeholder="Url">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="urltxt" placeholder="Texte Url">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="description" placeholder="Description">
                </div>

                <input type="submit" class="btn btn-primary btn-user btn-block" name="formCredential" value="Valider">

                <?php
                if ($message!=null) 
                {
                  echo '<div class="col-xl-12"> <p class="font-weight-bold text-center text-danger">' . $message . '</p></div>';
                }
                elseif ($messageOK!=null) 
                {
                  echo '<div class="col-xl-12"> <p class="font-weight-bold text-center text-success">' . $messageOK . '</p></div>';
                }
                // var_dump($message, $messageOK);
                ?>


               </form>

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
  <?php require_once "logout-modal.php"; ?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>