<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">



<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

    <?php
        if (isset($_SESSION['id']) AND $userInfo->id_user == $_SESSION['id'])
        {
    ?>        
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo($_SESSION['login']);?></span>
            <img class="img-profile rounded-circle" src="../img/avatar/<?php echo($_SESSION['avatar']);?>.jpg">
    <?php
        }
        else 
        {
    ?>
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo($pseudoUser);?></span>
            <img class="img-profile rounded-circle" src="../img/avatar/empty.jpg">
    <?php
        }
    ?>

    </a>
    <!-- Dropdown - User Information -->
    <?php include 'dropdown-user-info.php';?>
    </li>

</ul>

</nav>