<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POO PHP Initiation</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="container">
    <h1>POO & PHP</h1>

    <div id="jeu">   
        <?php 

        require 'class/personnage-form.php';
        require 'class/formulaire.php';


        $perso1= new personnage($_GET['nomPerso0'], $_GET['forceBrut0'], $_GET['forceMagique0'], $_GET['armure0'], $_GET['soin0'], $_GET['vie0'] );
        $perso2= new personnage($_GET['nomPerso1'], $_GET['forceBrut1'], $_GET['forceMagique1'], $_GET['armure1'], $_GET['soin1'], $_GET['vie1'] );

        $perso1->decrire();
        $perso2->decrire();

        if (rand(1, 2)) {
            while ($perso1->estVivant() && $perso2->estVivant()) {
                $perso1->hasard($perso2);
                if ($perso1->estVivant() && $perso2->estVivant()) {
                    $perso2->hasard($perso1);
                }
            }
        } else {
            while ($perso1->estVivant() && $perso2->estVivant()) {
                $perso2->hasard($perso1);
                if ($perso1->estVivant() && $perso2->estVivant()) {
                    $perso1->hasard($perso2);
                }
            }
        }



        /* $perso1->__decrire();
        $perso2->__decrire(); */



        /* $nomPerso1 = new personnage('nomPerso1', 25);

        $nomPerso1->__decrire();

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
        var_dump($lucas);  */

        ?>
    </div> 
</div>
</body>
</html>