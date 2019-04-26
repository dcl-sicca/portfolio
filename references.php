<?php
	session_start();
	$_SESSION['use_session'] = 'yes';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link href="https://fonts.googleapis.com/css?family=Archivo:700" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Orbitron:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Unlock" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/img-zoom.css">
    <title>Document</title>
</head>


<body>
<div id="shadowing"></div>
  
    <header id="header" role="banner" class="main-header">
            <?php include('menu-haut.php'); ?>  
    </header>

  
<main>
<div id="Ref">
    <h5>Mes références</h5>

    <div class="form-group">
                <label for="select-order">Classer par</label>
                <select class="form-control" id="select-order">
                    <option value="an">Années</option>
                    <option value="position">Importance</option>
                    <option value="techno">Technologies</option>
                </select>
            </div>
</div>

<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th style="width:5%" scope="col">Année</th>
        <th style="width:15%" scope="col">Ecran</th>
        <th style="width:20%;text-align: center;" scope="col">Technologie</th>
        <th style="width:40%" scope="col">Description</th>
        <th style="width:20%" scope="col">site</th>
      </tr>
    </thead>
    <tbody class="card-container">
<!-- Ameria V1 ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
      <tr class="item" data-an="2007" data-techno="PHP" data-position="1">
          <th scope="row">2007</th>
          <td><img class="snapEcran thumbnail zoom" src="img/Ameria/ameriav1.jpg"></td>
          <td style="text-align: center;"><img class="logos" src="img/logos/php-logo.png"><img class="logos" src="img/logos/HTML5-logo.png"><img class="logos" src="img/logos/CSS3-logo.png"><img class="logos" src="img/logos/js-logo.png"></td>
          <td>Ameria v1 : Première version du site de mon agence de communication</td>
          <td><a href="http://www.sicca-area.com/references/ameria-v1/" target="blank"><i class="fas fa-external-link-alt"></i> www.ameria.fr</a></td>
      </tr>
<!-- Ameria V2 ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
      <tr class="item" data-an="2012" data-techno="Wordpress" data-position="2">
          <th scope="row">2012</th>
          <td><img class="snapEcran thumbnail zoom" src="img/Ameria/ameriav2.jpg"></td>
          <td style="text-align: center;"><img class="logos" src="img/logos/wordpress.png"></td>
          <td>Ameria v2 : Deuxième version du site de mon agence de communication</td>
          <td><a href="http://www.sicca-area.com/references/ameria-v2/" target="blank"><i class="fas fa-external-link-alt"></i> www.ameria.fr</a></td>
      </tr>
<!-- CGPME ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
      <tr class="item" data-an="2014" data-techno="Wordpress" data-position="3">
        <th scope="row">2014</th>
        <td><img class="snapEcran thumbnail zoom" src="img/Ameria/cgpme.jpg"></td>
        <td style="text-align: center;"><img class="logos" src="img/logos/wordpress.png"></td>
        <td>CGPME : Association de PME</td>
        <td><a href="http://www.sicca-area.com/references/cgpme/" target="blank"><i class="fas fa-external-link-alt"></i> www.cgpme18.org</a></td>
      </tr>
<!-- Bourges ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
      <tr class="item" data-an="2006" data-techno="HTML4" data-position="4">
        <th scope="row">2006</th>
        <td><img class="snapEcran thumbnail zoom" src="img/Ameria/bourges.jpg"></td>
        <td style="text-align: center;"><img class="logos" src="img/logos/HTML4-logo.png"><img class="logos" src="img/logos/CSS3-logo.png"><img class="logos" src="img/logos/js-logo.png"></td>
        <td><strong>Ville de Bourges</strong> : concours Appel d'offre pour le nouveau site de la ville</td>
        <td><a href="http://sicca-area.com/references/bourges-ville/index.html" target="blank"><i class="fas fa-external-link-alt"></i> www.bourges.fr</a></td>
      </tr>
<!-- Alloutils ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
      <tr class="item" data-an="2011" data-techno="Prestashop" data-position="5">
        <th scope="row">2011</th>
        <td><img class="snapEcran thumbnail zoom" src="img/Ameria/Alloutils.jpg"></td>
        <td style="text-align: center;"><img class="logos" src="img/logos/prestashop.png"></td>
        <td>Alloutils : Site E-commerce d'outillage</td>
        <td><a href="http://www56.sicca-area.com/Alloutils-portail/alloutils.html" target="blank"><i class="fas fa-external-link-alt"></i> www.alloutils.fr</a></td>
      </tr>
<!-- Arche mode ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
      <tr class="item" data-an="2014" data-techno="Prestashop" data-position="6">
        <th scope="row">2014</th>
        <td><img class="snapEcran thumbnail zoom" src="img/Ameria/arche.jpg"></td>
        <td style="text-align: center;"><img class="logos" src="img/logos/prestashop.png"></td>
        <td>L'arche de la mode : Site E-commerce de vêtement de mode.Version de 2014, une refonte avant été effectué par une autre agence.</td>
        <td><a href="https://web.archive.org/web/20141220064027/http%3A%2F%2Flarchedelamode.fr%2Fboutique%2F" target="blank"><i class="fas fa-external-link-alt"></i> www.larchedelamode.fr</a></td>
      </tr>
<!-- Real ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
      <tr class="item" data-an="2009" data-techno="Wordpress" data-position="7">
        <th scope="row">2009</th>
        <td><img class="snapEcran thumbnail zoom" src="img/Ameria/real.jpg"></td>
        <td style="text-align: center;"><img class="logos" src="img/logos/wordpress.png"></td>
        <td>Real : Site Vitrine Tank à lait</td>
        <td><a href="http://www.real-froid.fr/" target="blank"><i class="fas fa-external-link-alt"></i> www.real-froid.fr</a></td>
      </tr>
<!-- Sofoc ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
      <tr class="item" data-an="2010" data-techno="PHP" data-position="8">
        <th scope="row">2010</th>
        <td><img class="snapEcran thumbnail zoom" src="img/Ameria/sofoc.jpg"></td>
        <td style="text-align: center;"><img class="logos" src="img/logos/php-logo.png"><img class="logos" src="img/logos/HTML5-logo.png"><img class="logos" src="img/logos/CSS3-logo.png"><img class="logos" src="img/logos/js-logo.png"></td>
        <td>Sofoc : Site vitrine Poignées de porte et fenêtre</td>
        <td><a href="http://www.sicca-area.com/references/sofoc/" target="blank"><i class="fas fa-external-link-alt"></i> www.sofoc.com</a></td>
      </tr>
<!-- Kermhit ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
      <tr class="item" data-an="2012" data-techno="HTML5" data-position="9">
        <th scope="row">2012</th>
        <td><img class="snapEcran thumbnail zoom" src="img/Ameria/kermhit.jpg"></td>
        <td style="text-align: center;"><img class="logos" src="img/logos/HTML5-logo.png"><img class="logos" src="img/logos/CSS3-logo.png"><img class="logos" src="img/logos/js-logo.png"></td>
        <td>Portail musical de la scène metal française</td>
        <td><a href="http://www.kermhit.com/" target="blank"><i class="fas fa-external-link-alt"></i> www.kermhit.com</a></td>
      </tr>
<!-- Monster Metal ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
      <tr class="item" data-an="2013" data-techno="Wordpress" data-position="10">
        <th scope="row">2013</th>
        <td><img class="snapEcran thumbnail zoom" src="img/Ameria/monster-metal.jpg"></td>
        <td style="text-align: center;"><img class="logos" src="img/logos/wordpress.png"></td>
        <td>Monster of metal : Festival de metal</td>
        <td><a href="http://monsther-of-metal.kermhit.com/" target="blank"><i class="fas fa-external-link-alt"></i> monsther-of-metal.kermhit.com</a></td>
      </tr>
<!-- Award Metal ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<tr class="item" data-an="2019" data-techno="Wordpress" data-position="11">
    <th scope="row">2019</th>
    <td><img class="snapEcran thumbnail zoom" src="img/Ameria/award-metal.jpg"></td>
    <td style="text-align: center;"><img class="logos" src="img/logos/wordpress.png"></td>
    <td>Projet en cours comme NRJ Music Award pour la scene Metal</td>
    <td><a href="https://awards.france-metal.fr/" target="blank"><i class="fas fa-external-link-alt"></i> awards.france-metal.fr</a></td>
  </tr>
<!-- Licencing Concepts ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
      <tr class="item" data-an="2018" data-techno="Wordpress" data-position="12">
        <th scope="row">2018</th>
        <td><img class="snapEcran thumbnail zoom" src="img/Ameria/licensingconcepts.jpg"></td>
        <td style="text-align: center;"><img class="logos" src="img/logos/wordpress.png"></td>
        <td>Licencing Concept : Vitrine d'inventeurs</td>
        <td><a href="http://www.licensingconcepts.com/" target="blank"><i class="fas fa-external-link-alt"></i> www.licensingconcepts.com</a></td>
      </tr>
<!-- Boeuf prestige ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<tr class="item" data-an="2014" data-techno="Wordpress" data-position="13">
    <th scope="row">2014</th>
    <td><img class="snapEcran thumbnail zoom" src="img/Ameria/boeuf-prestige.jpg"></td>
    <td style="text-align: center;"><img class="logos" src="img/logos/wordpress.png"></td>
    <td>Boeuf Prestige : Colis viande de boucher</td>
    <td><a href="http://sicca-area.com/references/boeuf-prestige/" target="blank"><i class="fas fa-external-link-alt"></i> www.boeuf-prestige.com</a></td>
  </tr>
<!-- Pti Bout d'laine ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<tr class="item" data-an="2012" data-techno="Wordpress" data-position="14">
    <th scope="row">2012</th>
    <td><img class="snapEcran thumbnail zoom" src="img/Ameria/ptiboutdlaine.jpg"></td>
    <td style="text-align: center;"><img class="logos" src="img/logos/wordpress.png">    <img class="logos" src="img/logos/prestashop.png"></td>
    <td>Pti bout d'laine : Portail boutique de laine avec site vitrine et boutique prestashop</td>
    <td><a href="http://ptitboutdlaine.com/" target="blank"><i class="fas fa-external-link-alt"></i> www.ptiboutdlaine.com</a></td>
  </tr>     
<!-- Sicca Area ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<tr class="item" data-an="2002" data-techno="HTML3" data-position="15">
    <th scope="row">2002</th>
    <td><img class="snapEcran thumbnail zoom" src="img/Ameria/sicca-area.jpg"></td>
    <td style="text-align: center;"><img class="logos" src="img/logos/HTML3-logo.png"><img class="logos" src="img/logos/CSS-logo.png"><img class="logos" src="img/logos/js-logo.png"></td>
    <td>Sicca Area : Mon ancien site perso</td>
    <td><a href="http://www.sicca-area.com/references/sicca-area/INDEX.htm" target="blank"><i class="fas fa-external-link-alt"></i> www.sicca-area.com</a></td>
  </tr>
<!-- Veronique Pinna ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<tr class="item" data-an="1999" data-techno="HTML3" data-position="16">
    <th scope="row">1999</th>
    <td><img class="snapEcran thumbnail zoom" src="img/Ameria/veronique-pinna.jpg"></td>
    <td style="text-align: center;"><img class="logos" src="img/logos/HTML3-logo.png"><img class="logos" src="img/logos/CSS-logo.png"><img class="logos" src="img/logos/js-logo.png"><img class="logos" src="img/logos/FLASH-logo.png"></td>
    <td>Veronique pinna : Site d'une maquilleuse</td>
    <td><a href="http://veronique-pinna.com/" target="blank"><i class="fas fa-external-link-alt"></i> www.veronique-pinna.com</a></td>
  </tr>
<!-- O Jardin des sens ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<tr class="item" data-an="2013" data-techno="Wordpress" data-position="17">
    <th scope="row">2013</th>
    <td><img class="snapEcran thumbnail zoom" src="img/Ameria/ojardindessens.jpg"></td>
    <td style="text-align: center;"><img class="logos" src="img/logos/wordpress.png"></td>
    <td>O jardin des Sens : Soins Beauté</td>
    <td><a href="http://ojardindessens.fr/" target="blank"><i class="fas fa-external-link-alt"></i> www.ojardindessens.fr</a></td>
  </tr>
<!-- Smati Creative ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<tr class="item" data-an="1998" data-techno="HTML3" data-position="18">
    <th scope="row">1998</th>
    <td><img class="snapEcran thumbnail zoom" src="img/Ameria/smati.jpg"></td>
    <td style="text-align: center;"><img class="logos" src="img/logos/HTML3-logo.png"><img class="logos" src="img/logos/CSS-logo.png"><img class="logos" src="img/logos/js-logo.png"></td>
    <td>Smati Creative : Créatif</td>
    <td><a href="http://sicca-area.com/references/smati-creative/index.htm" target="blank"><i class="fas fa-external-link-alt"></i> www.smati-creative.com</a></td>
  </tr>
  <!-- Jumpfun ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<tr class="item" data-an="1998" data-techno="HTML3" data-position="19">
    <th scope="row">1998</th>
    <td><img class="snapEcran thumbnail zoom" src="img/Ameria/jumpfun.jpg"></td>
    <td style="text-align: center;"><img class="logos" src="img/logos/HTML3-logo.png"><img class="logos" src="img/logos/CSS-logo.png"><img class="logos" src="img/logos/js-logo.png"></td>
    <td>Jumpfun : Parc de loisir</td>
    <td><a href="http://sicca-area.com/references/jumpfun/" target="blank"><i class="fas fa-external-link-alt"></i> www.jumpfun78.com</a></td>
  </tr>
<!-- Madauth ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<tr class="item" data-an="2009" data-techno="HTML4" data-position="20">
    <th scope="row">2009</th>
    <td><img class="snapEcran thumbnail zoom" src="img/Ameria/madauth.jpg"></td>
    <td style="text-align: center;"><img class="logos" src="img/logos/HTML4-logo.png"><img class="logos" src="img/logos/CSS3-logo.png"><img class="logos" src="img/logos/js-logo.png"></td>
    <td>Madauth : Artiste Peintre</td>
    <td><a href="http://sicca-area.com/references/madauth/" target="blank"><i class="fas fa-external-link-alt"></i> www.madauth.com</a></td>
  </tr>
<!-- Coat ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<tr class="item" data-an="2008" data-techno="HTML4" data-position="21">
    <th scope="row">2008</th>
    <td><img class="snapEcran thumbnail zoom" src="img/Ameria/coat.jpg"></td>
    <td style="text-align: center;"><img class="logos" src="img/logos/HTML4-logo.png"><img class="logos" src="img/logos/CSS3-logo.png"><img class="logos" src="img/logos/js-logo.png"></td>
    <td>Coat : Plomberie Chauffagiste</td>
    <td><a href="http://sicca-area.com/references/coat/index.html" target="blank"><i class="fas fa-external-link-alt"></i> www.coat.fr</a></td>
  </tr>
<!-- Ombre et lumière ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<tr class="item" data-an="2001" data-techno="HTML3" data-position="22">
    <th scope="row">2001</th>
    <td><img class="snapEcran thumbnail zoom" src="img/Ameria/ombre-lumiere.jpg"></td>
    <td style="text-align: center;"><img class="logos" src="img/logos/HTML3-logo.png"><img class="logos" src="img/logos/CSS3-logo.png"><img class="logos" src="img/logos/js-logo.png"></td>
    <td>Ombre et lumière : Concours site Internet</td>
    <td><a href="http://sicca-area.com/references/ombres-et-lumieres/index.html" target="blank"><i class="fas fa-external-link-alt"></i> www.angelis.fr</a></td>
  </tr>
  <!-- Conseil Energie ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<tr class="item" data-an="2009" data-techno="HTML5" data-position="23">
    <th scope="row">2009</th>
    <td><img class="snapEcran thumbnail zoom" src="img/Ameria/conseil-energie.jpg"></td>
    <td style="text-align: center;"><img class="logos" src="img/logos/HTML5-logo.png"><img class="logos" src="img/logos/CSS3-logo.png"><img class="logos" src="img/logos/js-logo.png"></td>
    <td>Conseil Energie : Diagnostic Energie</td>
    <td><a href="http://sicca-area.com/references/conseil-energie/" target="blank"><i class="fas fa-external-link-alt"></i> www.conseil-energie.fr</a></td>
  </tr>
  <!-- Fusion ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
  <tr class="item" data-an="1997" data-techno="HTML3" data-position="24">
      <th scope="row">1997</th>
      <td><img class="snapEcran thumbnail zoom" src="img/Ameria/fusion.jpg"></td>
      <td style="text-align: center;"><img class="logos" src="img/logos/HTML3-logo.png"><img class="logos" src="img/logos/CSS-logo.png"><img class="logos" src="img/logos/js-logo.png"></td>
      <td>Fusion : Mon tout premier site de demomaker</td>
      <td><a href="http://sicca-area.com/references/fusion-demomaker/INDEX.HTM" target="blank"><i class="fas fa-external-link-alt"></i> www.fusion.fr</a></td>
    </tr>
      <!-- Le bois de tine ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<tr class="item" data-an="2004" data-techno="HTML4" data-position="25">
    <th scope="row">2004</th>
    <td><img class="snapEcran thumbnail zoom" src="img/Ameria/boistinne.jpg"></td>
    <td style="text-align: center;"><img class="logos" src="img/logos/HTML4-logo.png"><img class="logos" src="img/logos/CSS3-logo.png"><img class="logos" src="img/logos/js-logo.png"></td>
    <td>Le bois de tinne : Vente de tee-shirt</td>
    <td><a href="http://sicca-area.com/references/le-bois-de-tinne/index.htm" target="blank"><i class="fas fa-external-link-alt"></i> www.boisdetinne.com</a></td>
  </tr>
    <!-- Saint Amand Evenement ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<tr class="item" data-an="2005" data-techno="HTML4" data-position="26">
    <th scope="row">2005</th>
    <td><img class="snapEcran thumbnail zoom" src="img/Ameria/saint-amand-evenement.jpg"></td>
    <td style="text-align: center;"><img class="logos" src="img/logos/HTML4-logo.png"><img class="logos" src="img/logos/CSS3-logo.png"><img class="logos" src="img/logos/js-logo.png"></td>
    <td>Festival de musique Saint amand Evenement</td>
    <td><a href="http://www.sicca-area.com/references/saint-amand-evenement/" target="blank"><i class="fas fa-external-link-alt"></i> www.saint-amand-evenement.fr</a></td>
  </tr>
    <!-- Equivalangue ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<tr class="item" data-an="2010" data-techno="WORDPRESS" data-position="27">
    <th scope="row">2010</th>
    <td><img class="snapEcran thumbnail zoom" src="img/Ameria/equivalangue.jpg"></td>
    <td style="text-align: center;"><img class="logos" src="img/logos/wordpress.png"><img class="logos" src="img/logos/HTML4-logo.png"><img class="logos" src="img/logos/CSS3-logo.png"><img class="logos" src="img/logos/js-logo.png"></td>
    <td>Equivalangue : Traduction et interprète</td>
    <td><a href="http://www56.sicca-area.com/equivalangue/" target="blank"><i class="fas fa-external-link-alt"></i> www.equivalangue.org</a></td>
  </tr>
    <!-- Jeu POO Délit d'influence ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <tr class="item" data-an="2019" data-techno="PHP POO" data-position="28">
    <th scope="row">2019</th>
    <td><img class="snapEcran thumbnail zoom" src="img/Ameria/delit.jpg"></td>
    <td style="text-align: center;"><img class="logos" src="img/logos/php-logo.png"><img class="logos" src="img/logos/HTML5-logo.png"><img class="logos" src="img/logos/CSS3-logo.png"><img class="logos" src="img/logos/js-logo.png"></td>
    <td>Le combat des Heros : Mini jeu en POO</td>
    <td><a href="http://sicca-area.com/references/GamePOOdelit/" target="blank"><i class="fas fa-external-link-alt"></i> Le combat des Heros</a></td>
  </tr>

    </tbody>
  </table>
</div>

</main>

    <footer>
        <!-- Partenaires ----------------------------------------------------------------------------------------------------------------------------------->
        <?php include('partenaires.php'); ?>
        <!-- Mentions et réseaux sociaux -------------------------------------------------------------------------------------------------------------------->
        <?php include('social.php'); ?>

        <div id="box">
            <div id="boxcontent"  onclick="closebox()">  </div>    
        </div>
        
    </footer>

    <button type="button" id="backtop" title="Haut de page">Haut de page</button>

    <!-- <script src="js/hautpage-seomix.js"></script> -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/lightbox-fade.js"></script>
    <!--
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    -->
</body>

</html>