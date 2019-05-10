<?php
if(isset($_GET['name_societe'])){//Si get name dans url
$resultat = $bdd->prepare('DELETE FROM remi_societe WHERE name_societe=:name_societe');
$resultat->execute(array(
'name_societe'=> $_GET['name_societe']
));
}

?>
