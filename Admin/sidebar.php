<?php
// Check Active Session
if (isset($_SESSION['id']) AND $userInfo->id_user === $_SESSION['id'])
{
    if ($_SESSION['role_status'] == 4)
    {
        include 'sidebar-admin.php';

    }
    else if ($_SESSION['role_status'] == 2)
    {
        include 'sidebar-corrector.php';
    }
    else if ($_SESSION['role_status'] == 3)
    {
        include 'sidebar-contributor.php';
    }
    else
    {
        include 'sidebar-subscriber.php';
    }
}

else
{ 
    include 'sidebar-disconnect.php';
}
?>
