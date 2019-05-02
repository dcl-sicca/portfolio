<?php
$reponse = $bdd->prepare('SELECT * FROM credentials ORDER BY credentials_year DESC LIMIT 3');