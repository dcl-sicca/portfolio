<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php?id=<?php echo $_SESSION['id'];?>">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-tools"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Sicca Area Admin <sup>2</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.php?id=<?php echo $_SESSION['id'];?>">
            <a class="nav-link" href="index.php?id=<?php echo $_SESSION['id'];?>">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Tableau de Bord</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Utilities</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Custom Utilities:</h6>
        <a class="collapse-item" href="utilities-color.php">Colors</a>
        <a class="collapse-item" href="utilities-border.php">Borders</a>
        <a class="collapse-item" href="utilities-animation.php">Animations</a>
        <a class="collapse-item" href="utilities-other.php">Other</a>
    </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Addons
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
    <i class="fas fa-fw fa-folder"></i>
    <span>Pages</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Ecrans de Connexion:</h6>
                <a class="collapse-item" href="profil.php?id=<?php echo $_SESSION['id'];?>">Mon Profil</a>
                <a class="collapse-item" href="forgot-password.php?id=<?php echo $_SESSION['id'];?>">Rénitialiser Mot de Passe</a>
                <a class="collapse-item" href="logout.php">Déconnexion</a>
    </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>