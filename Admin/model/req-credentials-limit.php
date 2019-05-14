<?php
$reponse = $bdd->prepare('SELECT * FROM credentials ORDER BY credentials_date DESC LIMIT 3');