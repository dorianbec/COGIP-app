<?php
$factureNum = htmlspecialchars($_GET['n_facture']);
$facture = substr($factureNum, 0, 15);
////////////////SELECTIONNE CHAMP /GETNAME
$affich = $bdd->prepare(
"SELECT *
FROM remi_facture, remi_societe
WHERE remi_facture.name_societe = remi_societe.name_societe
AND n_facture=:n_facture");
$affich->execute(array(
'n_facture'=> $facture
));

$resultat = $bdd->prepare(
"SELECT *
FROM remi_facture, remi_contact
WHERE remi_facture.name_contact = remi_contact.name
AND n_facture=:n_facture");
$resultat->execute(array(
'n_facture'=> $facture
));

///////////////RECUPERE VALEUR URL CODE VISIBLE
?>

<?php $resultat->closeCursor();?>
