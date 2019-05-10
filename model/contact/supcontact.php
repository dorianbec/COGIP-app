<?php
if(isset($_GET['name'])){//Si get name dans url
$resultat = $bdd->prepare('DELETE FROM remi_contact WHERE name=:name');
$resultat->execute(array(
'name'=> $_GET['name']
));
}
?>