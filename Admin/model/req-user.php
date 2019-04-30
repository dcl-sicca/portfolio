<?php
$stmt = $bdd->prepare('SELECT * FROM users NATURAL JOIN role WHERE user_login = :login');


