<?php session_start();
require 'model/pdo-admin.php';

if (isset($_GET['id'])) 
{
  $getId = intval($_GET['id']); // Convert the entry into a number
  include 'model/req-user-id.php';
  $reqUser->bindParam(':getId', $getId);
  $reqUser->execute();
  $userInfo = $reqUser->fetch();

    if ($userInfo != false)
    {
        if (isset($_SESSION['id']) AND $userInfo->id_user === $_SESSION['id'] && ($_SESSION['role_status']) !== '1')
        {
            $message=null;
            require_once 'views/addCredential.html.php';











            
            if (isset($_POST['formCredential']))
            {
                  
                $name = ($_POST['name']);
                $date = ($_POST['date']);
                $position = ($_POST['position']);
                if (isset($_POST['snap'])) { $snap = $_POST['snap']; }
                $url = ($_POST['url']);
                $urltxt = ($_POST['urltxt']);
                $description = ($_POST['description']);
                include 'model/add-credential.php';


                var_dump ($name, $date, $position, $snap, $url, $urltxt, $description);

                // $reqInsert->execute(array(
                //   'name' => $name,
                //   'date' => 2007,    
                //   'position' => $position,
                //   'snap' => $snap,
                //   'url' => $url,
                //   'urltxt' => $urltxt,
                //   'description' => $description,
                //   'id_user' => 7
                //   ));


                      
            }
            else
            {
              $message=' ';
            }











































        }
        elseif (isset($_SESSION['id']) AND $userInfo->id_user === $_SESSION['id'] && ($_SESSION['role_status']) == '1')
        {
            require_once 'views/index-subscriber.html.php';
        }
        else 
        {
            header("Location: login.php");
        }  
      $reqUser->closeCursor();     
    }
    else
    {
      header("Location: login.php");
    }
  $reqUser->closeCursor();
}
else
{
  header("Location: login.php");
}


