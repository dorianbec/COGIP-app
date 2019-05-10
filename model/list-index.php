<?php
$resultat_facture = $bdd->query('SELECT * FROM remi_facture LIMIT 5');
$resultat_contact = $bdd->query('SELECT * FROM remi_contact LIMIT 5');
$resultat_societe = $bdd->query('SELECT * FROM remi_societe LIMIT 5');
?>