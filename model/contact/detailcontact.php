<?php
////////////////SELECTIONNE CHAMP /GETNAME
$affich = $bdd->prepare("SELECT * FROM remi_contact WHERE name=:name");
$affich->execute(array(
'name'=> $_GET['name']
));

////////SELECTIONNE FACTURE/NOM GET
$resultat = $bdd->prepare("SELECT * FROM remi_facture WHERE name_contact=:name_contact");
$resultat->execute(array(
'name_contact'=> $_GET['name']
));

///////////////RECUPERE VALEUR URL CODE VISIBLE
?>