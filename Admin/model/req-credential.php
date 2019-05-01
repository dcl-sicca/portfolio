<?php
// bdd preparation of the request references
$req = $bdd->prepare('SELECT * FROM credentials NATURAL JOIN users');