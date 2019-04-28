<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Références</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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

        <?php if (isset($_SESSION['id']) AND $userInfo->id_user === $_SESSION['id'] && ($_SESSION['role_status']) !== '1') 
        {?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Références</h1>
          <p class="mb-4">DataTables est un plugin tiers qui est utilisé pour générer la table de démonstration ci-dessous. Pour plus d'informations sur DataTables, veuillez consulter le site Web de l'<a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Référence d Sicca-Area</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Année</th>
                      <th>Nom</th>
                      <th>Technologie</th>
                      <th>Description</th>
                      <th>Lien</th>
                      <th>Site</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Année</th>
                      <th>Nom</th>
                      <th>Technologie</th>
                      <th>Description</th>
                      <th>Lien</th>
                      <th>Site</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
                  // Cut a sentence without cutting a word
                  function cutString($string, $start, $length, $endStr = '[&hellip]'){
                    if( strlen( $string ) <= $length ) return $string;
                    $str = mb_substr( $string, $start, $length - strlen( $endStr ) + 1, 'UTF-8');
                    return substr( $str, 0, strrpos( $str,' ') ).$endStr;
                  }

                  // bdd preparation of the request references
                  $req = $bdd->prepare('SELECT * FROM credentials NATURAL JOIN users');
                  $req -> execute();
                  // Each input is displayed one by one
                  while ($row = $req->fetch())
                  {
                    $techChainImg = '';
                    $techChain = '';

                    $req2 = $bdd->prepare("SELECT * FROM have
                    INNER JOIN technology ON have.id_technology = technology.id_technology
                    WHERE have.id_credentials = :idcredentials");
                    $req2->execute(array('idcredentials' => $row->id_credentials));

                      // Each technology is displayed one by one
                      while ($row2 = $req2->fetch())
                      {
                        $techChain = $row2->technology_name.' '.$techChain;
                        $techChainImg = '<img class="logos" src="img/logos/'.$row2->technology_img.'.png"> '.$techChainImg;
                      }
                    // Complete the processing of the request 2
                    $req2->closeCursor();
                    ?>
                    <tr>
                      <td><?php echo $row->credentials_year; ?></td>
                      <td><?php echo $row->credentials_name; ?></td>
                      <td><?php echo $techChain ;?></td>
                      <?php
                      $credentials_description = $row->credentials_description;
                      $content = strip_tags( $credentials_description );
                      $description = cutString($content, 0, 40, '...');
                      ?>
                      <td><?php echo ($description); ?></td>
                      <td><?php echo $row->credentials_urltxt; ?></td>
                      <td><a href="updateReference.php?id=<?php echo $_SESSION['id'];?>&id_credentials=<?php echo $row->id_credentials?>">Modifier</a></td>
                    </tr>
                    <?php
                  }
                  // Complete the processing of the request
                  $req->closeCursor();
                  ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
        <?php 
        } ?>

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
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

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>