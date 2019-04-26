<?php


require 'class/personnage.php';



$georges = new personnage('georges', 25);
$lucas = new personnage('lucas', 10);


$georges->__decrire();

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
var_dump($lucas);


?>

</body>
</html>