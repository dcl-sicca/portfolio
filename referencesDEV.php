<?php
	session_start();
    $_SESSION['use_session'] = 'yes';
    // Connect to BDD
    require 'pdo.php';
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
    <?php
    // // bdd preparation of the request references
    $req = $bdd->prepare('SELECT * FROM credentials NATURAL JOIN users');
    $req -> execute();
    // Each input is displayed one by one
    while ($row = $req->fetch())
    {
        $techChainImg = '';
        $techChain = '';
        $req2 = $bdd->prepare("SELECT * FROM have
                INNER JOIN technology ON have.id_technology = technology.id_technology
                WHERE have.id_credentials = :idcredentials");
                $req2->execute(array(
                    'idcredentials' => $row->id_credentials
                ));
        // Each technology is displayed one by one
        while ($row2 = $req2->fetch()){
            $techChain = $row2->technology_name.' '.$techChain;
            $techChainImg = '<img class="logos" src="img/logos/'.$row2->technology_img.'.png"> '.$techChainImg;
        }
        // Complete the processing of the request 2
        $req2->closeCursor();
        ?>

        <tr class="item" data-an="<?php echo $row->credentials_year; ?>" data-techno="<?php echo $techChain; ?>" data-position="<?php echo $row->credentials_position; ?>">
            <th scope="row"><?php echo $row->credentials_year; ?></th>
            <td><img class="snapEcran thumbnail zoom" src="data:image/jpg;base64,<?php echo $row->credentials_snap; ?>" alt="<?php echo $row->credentials_name; ?>"></td>
            <td style="text-align: center;"><?php echo $techChainImg ;?></td>
            <td><?php echo $row->credentials_description; ?></td>
            <td><a href="<?php echo $row->credentials_url; ?>" target="blank"><i class="fas fa-external-link-alt"></i> <?php echo $row->credentials_urltxt; ?></a></td>
        </tr>

        <?php
    }

        // Complete the processing of the request
        $req->closeCursor();
        ?>

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