<?php
$resultat = $bdd->query('SELECT * FROM `remi_user`');
if(isset($_GET['id'])){//Si get id dans url
$resultat = $bdd->prepare('DELETE FROM remi_user WHERE id=:id');
$resultat->execute(array(
'id'=> $_GET['id']
));
     }

?>
