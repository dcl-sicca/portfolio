<?php
    // Selon l'utilisateur
    if (isset($_SESSION['id']) AND $userInfo['id_users'] == $_SESSION['id'])
    {
?>

        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="<?php echo $profil; ?>">
            <a class="dropdown-item" href="profil.php?id=<?php echo $_SESSION['id'];?>" >
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Mon Profil
            </a>
            <a class="dropdown-item" href="#">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            Règlages
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Deconnexion
            </a>
        </div>
<?php
    }
    else
    { 
    ?>
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="register.php">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Inscription
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="login.php" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Connexion
            </a>
        </div>
        <?php
    }
?>  