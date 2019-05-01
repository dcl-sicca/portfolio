<?php
if ($_SESSION['role_status'] === '4')
{
    require_once 'views/sidebar-admin.html.php';
}
else if ($_SESSION['role_status'] === '3')
{
    require_once 'views/sidebar-contributor.html.php';
}
else if ($_SESSION['role_status'] === '2')
{
    require_once 'views/sidebar-corrector.html.php';
}
else if ($_SESSION['role_status'] === '1')
{
    require_once 'views/sidebar-subscriber.html.php';
}
else
{ 
    require_once 'views/sidebar-disconnect.html.php';
}
