<?php
    // Connect to BDD
    // require 'pdo.php';
?>

<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=sicca_portfolio;charset=utf8', 'sicca', 'Am35sicc@25$$');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>



<?php

    // $bdd->exec('SET NAMES utf8');


    $req = $bdd ->prepare("SELECT * FROM credentials");
    $req -> execute();
    ob_start();
?>
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

while ($row = $req->fetch()){
    $name = $row['name_credentials'];
    ?>

    <?php 
    echo $name;
    echo("Coucou");
    ?>

    <?php
}

$req ->closeCursor();
$content = ob_get_clean();
?>


</body>
</html>








  


