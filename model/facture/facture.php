<?php 
///////////req remi facture ts les champs et remi sct pour recuperer le type
$resultat = $bdd->query(
'SELECT * FROM `remi_facture`
LEFT JOIN `remi_societe`
ON remi_facture.name_societe = remi_societe.name_societe
ORDER BY date_facture
DESC');?>