<div class="container">
<h3 class="text-center m-5">Facture n°:<?php echo $facture;?></h3>

<h5>Société liée à la facture</h5>
<?php $donnees = $affich->fetch()
?>
<?php if($donnees !=""){
?>
<div class="row m-3">
  <div class="col-4">Nom société</div>
  <div class="col-4">TVA</div>
  <div class="col-4">Type de société</div>
</div>

<div class="row m-3">
  <div class="col-4"><?php echo $donnees[name_societe];?></div>
  <div class="col-4"><?php echo $donnees[n_tva];?></div>
  <div class="col-4"><?php echo $donnees[type_societe];?></div>
</div>

<?php }
else{echo"société supprimée/inexistante";
}
?>
<?php $affich->closeCursor();?>

<h5>Personne de contact</h5>
<?php $donneees = $resultat->fetch()
?>
<?php if($donneees !=""){
?>
<div class="row m-3">
  <div class="col-4">Nom du contact</div>
  <div class="col-4">Email</div>
  <div class="col-4">Phone</div>
</div>
<div class="row m-3">
  <div class="col-4"><?php echo $donneees[name];?></div>
  <div class="col-4"><?php echo $donneees[mail];?></div>
  <div class="col-4"><?php echo $donneees[n_tel];?></div>
</div>

<?php }
else{echo"contact supprimé";
}
?>

