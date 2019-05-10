<?php
if(isset($_GET['n_facture'])){//Si get name dans url
$resultat = $bdd->prepare('DELETE FROM remi_facture WHERE n_facture=:n_facture');
$resultat->execute(array(
'n_facture'=> $_GET['n_facture']
));

     }
?>
