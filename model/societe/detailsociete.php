<?php 
$societeName=$_GET['name_societe'];
$fournisseur = $bdd->query('SELECT * FROM remi_societe where');
$contacteur = $bdd->query('SELECT * FROM remi_contact');
$contact=$contacteur->fetch();
?>
