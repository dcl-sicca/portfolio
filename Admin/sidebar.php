<?php
// Check Active Session
if (isset($_SESSION['id']) AND $userInfo->id_user === $_SESSION['id'])
{
    if ($_SESSION['role_status'] === '4')
    {
        require_once 'sidebar-admin.php';

    }
    else if ($_SESSION['role_status'] === '2')
    {
        require_once 'sidebar-corrector.php';
    }
    else if ($_SESSION['role_status'] === '3')
    {
        require_once 'sidebar-contributor.php';
    }
    else
    {
        require_once 'sidebar-subscriber.php';
    }
}

else
{ 
    require_once 'sidebar-disconnect.php';
}
?>
