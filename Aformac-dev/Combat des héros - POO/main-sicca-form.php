<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="get" action="traitement.php">
        <input type="text" name="nomPerso1" placeholder="Nom Perso 1">
        <input type="text" name="forceBrut1" placeholder="Force Brut 1">
        <input type="text" name="forceMagique1" placeholder="Force Magique 1">
        <input type="text" name="armure1" placeholder="Armure 1">
        <input type="text" name="vie1" placeholder="Vie 1">
        <input type="text" name="soin1" placeholder="Soin 1">

        <input type="text" name="nomPerso2" placeholder="Nom Perso 2">
        <input type="text" name="forceBrut2" placeholder="Force Brut 2">
        <input type="text" name="forceMagique2" placeholder="Force Magique 2">
        <input type="text" name="armure2" placeholder="Armure 2">
        <input type="text" name="vie2" placeholder="Vie 2">
        <input type="text" name="soin2" placeholder="Soin 2">








        <input type="submit" value="Enregistrer">
    </form>


<?php


require 'class/personnage-form.php';



/* $georges = new personnage('georges', 25);
$lucas = new personnage('lucas', 10); */


/* $georges->__decrire();

$georges->__regenere();

$lucas->__decrire();

$georges->__attaqueMagique($lucas);
$lucas->__attaqueMagique($georges);

$georges->__attaqueBrut($lucas);
$lucas->__attaqueMagique($georges);

$georges->__attaqueBrut($lucas);
$lucas->__attaqueMagique($georges);

$georges->__attaqueBrut($lucas);
$lucas->__attaqueMagique($georges);

$georges->__attaqueBrut($lucas);
$lucas->__attaqueMagique($georges);

var_dump($georges);
var_dump($lucas) */;


?>

</body>
</html>