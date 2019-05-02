<?php
$reqCount = $bdd->prepare ('SELECT COUNT(DISTINCT credentials_name) AS PercentTech_references FROM credentials');