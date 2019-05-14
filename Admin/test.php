<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
Hello

<?php 
require 'model/pdo-admin.php';
$resultshowstatus = $bdd->prepare('SHOW TABLE STATUS LIKE "credentials"');

$resultshowstatus -> execute();
$id = $resultshowstatus->fetch();
$id_credentials = $id->Auto_increment;

var_dump($id_credentials);
?>
    
</body>
</html>