<?php
// Connect to BDD
require 'pdo.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Base</title>
</head>
<body>

<?php
// bdd preparation of the request references
$req = $bdd->prepare('SELECT * FROM credentials NATURAL JOIN users');
$req -> execute();
// Each input is displayed one by one
while ($row = $req->fetch())
{
    $chaineTechno = '';
    $idcredentials = $row['id_credentials'];
    $name = $row['name_credentials'];
    $year = $row['year_credentials'];
    $description = $row['description_credentials'];
    $url = $row['url_credentials'];
    $txturl = $row['txturl_credentials'];
    $snap = $row['snap_credentials'];
    $users = $row['username_users'];

    $req2 = $bdd->prepare("SELECT * FROM have
            INNER JOIN technology ON have.id_technology = technology.id_technology
            WHERE have.id_credentials = :idcredentials");
            $req2->execute(array(
                'idcredentials' => $idcredentials
            ));
    // Each technology is displayed one by one
    while ($row2 = $req2->fetch()){
        $chaineTechno = $row2['technology_technology'].".jpg ".$chaineTechno;
    }
    ?>
        <p>
        <strong>Nom</strong> : <?php echo $name; ?><br />
        <strong>An</strong> : <?php echo $year; ?><br />
        <strong>Description</strong> : <?php echo $description; ?><br />
        <strong>Liens</strong> : <a href="<?php echo $url; ?>" target="blank"> <?php echo $txturl; ?></a><br />
        <strong>Créé par</strong> : <?php echo $users; ?><br />
        <strong>Technologie</strong> : <?php echo $chaineTechno ;?><br />
        
        <img src="data:image/jpg;base64,<?php echo $snap; ?>" alt="<?php echo $name; ?>"><br />
        
    </p>
    <?php
}

// Complete the processing of the request
$req->closeCursor();
?>
</body>
</html>








  


