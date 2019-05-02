<?php
$reqTech = $bdd->prepare('SELECT technology_name,Count(technology_name) 
AS PercentTech FROM have INNER JOIN technology ON have.id_technology = technology.id_technology 
WHERE technology_name != " " GROUP BY technology_name
ORDER BY technology_name DESC');