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
            $messageOK=null;
            require 'views/addCredential.html.php';
            if (isset($_POST['formCredential']))
            {
                $name = ($_POST['name']);
                $date = ($_POST['date']);
                $position = ($_POST['position']);
                $url = ($_POST['url']);
                $urltxt = ($_POST['urltxt']);
                $description = ($_POST['description']);
                $idUser = ($_SESSION['id']);
                $id_technology1 = ($_POST['technology1']);
                $id_technology2 = ($_POST['technology2']);
                $id_technology3 = ($_POST['technology3']);
                $id_technology4 = ($_POST['technology4']);

                include 'model/req-idauto-credentials.php';
                $resultshowstatus -> execute();
                $id = $resultshowstatus->fetch();
                $id_credentials = $id->Auto_increment;

                include 'model/add-credential.php';
                include 'model/add-technology.php';

                      if ($_FILES['photo']['error']) {  
                        switch ($_FILES['photo']['error']){  
                              case 1: // UPLOAD_ERR_INI_SIZE  
                                $message = "La taille du fichier est plus grande que la limite autorisée par le serveur (paramètre upload_max_filesize du fichier php.ini)."; 
                                break;  
                              case 2: // UPLOAD_ERR_FORM_SIZE  
                                $message = "La taille du fichier est plus grande que la limite autorisée par le formulaire (paramètre post_max_size du fichier php.ini)."; 
                                break;  
                              case 3: // UPLOAD_ERR_PARTIAL  
                                $message = "L'envoi du fichier a été interrompu pendant le transfert."; 
                                break;  
                              case 4: // UPLOAD_ERR_NO_FILE  
                                $message = "La taille du fichier que vous avez envoyé est nulle."; 
                                break;  
                            }  
                      }  
                      else 
                      {  
                      //if there are no mistakes then $_FILES['nom_du_fichier']['error'] 
                      //is 0  
                          $messageOK = "Aucune erreur dans le transfert du fichier."; 
                          if ((isset($_FILES['photo']['name'])&&($_FILES['photo']['error'] == UPLOAD_ERR_OK))) 
                          { 
                            $photo = $_FILES['photo']['name'];
                            $chemin_destination = '../img/Ameria/'; 
                            //Moving the file from the temporary directory (stored by default) to the destination directory 
                            move_uploaded_file($_FILES['photo']['tmp_name'], $chemin_destination.$_FILES['photo']['name']); 
                            $messageOK = "Le fichier ".$_FILES['photo']['name']." a été copié dans le répertoire photos"; 
                          } 
                          else 
                          { 
                            $message = "Le fichier n'a pas pu être copié dans le répertoire photos."; 
                          } 
                      } 
                $reqInsert->execute(array(
                  'name' => $name,
                  'date' => $date,    
                  'position' => $position,
                  'snap' => $photo,
                  'url' => $url,
                  'urltxt' => $urltxt,
                  'description' => $description,
                  'id_user' => $idUser
                  ));

                if (isset($_POST['technology1'])) {
                  $reqTech->execute(array(
                    'id_technology' => $id_technology1,
                    'id_credentials' => $id_credentials
                    ));
                  $reqTech->closeCursor();  
                }

                if (isset($_POST['technology2'])) {
                  $reqTech->execute(array(
                    'id_technology' => $id_technology2,
                    'id_credentials' => $id_credentials
                    ));
                  $reqTech->closeCursor();
                }

                if (isset($_POST['technology3'])) {
                  $reqTech->execute(array(
                    'id_technology' => $id_technology3,
                    'id_credentials' => $id_credentials
                    ));
                  $reqTech->closeCursor();
                }

                if (isset($_POST['technology4'])) {
                  $reqTech->execute(array(
                    'id_technology' => $id_technology4,
                    'id_credentials' => $id_credentials
                    ));
                  $reqTech->closeCursor();
                }


                
     
            }
            else
            {
              $message='OK';
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


