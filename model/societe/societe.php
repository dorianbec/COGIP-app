<?php 
$fournisseur=$bdd->query('SELECT * FROM `remi_societe` WHERE remi_societe.type_societe="fournisseur" ORDER BY remi_societe.name_societe');
$client=$bdd->query('SELECT * FROM `remi_societe` WHERE remi_societe.type_societe="client" ORDER BY remi_societe.name_societe');
?>
