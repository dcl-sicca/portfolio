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
<link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

<?php require_once ("sidebar.php") ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php require_once 'views/topbar.html.php'; ?>

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Mon Profil</h1>
                            </div>
                                <!-- -------------------------------- Content --------------------------------------- -->
                                <div class="col-xl-12 col-lg-7">
                                    <!-- Profil -->
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary"><?php echo $userInfo->user_pseudo; ?></h6>
                                        </div>
                                        <div class="card-body">
                                            <img src="../img/avatar/<?php echo $userInfo->user_avatar; ?>.jpg" alt="">
                                            <p class="lead text-muted">
                                                <b>Login : </b><?php echo $userInfo->user_login; ?><br>
                                                <b>Pseudo : </b><?php echo $userInfo->user_pseudo; ?><br>
                                                <b>Nom : </b><?php echo $userInfo->user_name; ?><br>
                                                <b>Email : </b><?php echo $userInfo->user_email; ?><br>
                                                <b>Rôle Statut : </b><?php echo  $_SESSION['role_status']; ?><br>
                                                <b>Rôle : </b><?php echo $userInfo->role_name; ?><br>
                                            </p>
                                            <p>
                                                <a href="modif-profil.php?id=<?php echo $_SESSION['id'];?>" class="btn btn-primary my-2">Modifier votre profil</a>
                                                <a href="#" class="btn btn-secondary my-2">Modifier votre mot de passe</a>
                                            </p>
                                        <div>
                                    </div>
                                </div>
                            </div> 
                            
                        </div>
                        <!-- end of Page Heading --> 
                    </div>
                    <!-- End of Begin Page Content -->

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
<?php require_once 'logout-modal.php';?>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>
