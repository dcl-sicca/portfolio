<?php
$req2 = $bdd->prepare("SELECT * FROM have
INNER JOIN technology ON have.id_technology = technology.id_technology
WHERE have.id_credentials = :idcredentials");
$req2->execute(array(
    'idcredentials' => $row->id_credentials
));