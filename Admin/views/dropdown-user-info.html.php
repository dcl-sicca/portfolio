<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
    <a class="dropdown-item" href=" ">
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
        Déconnexion
    </a>
</div>