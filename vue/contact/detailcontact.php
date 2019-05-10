<div class="container">
<h3 class="text-center m-5"><?php echo $_GET[name];?> <?php echo $_GET[first_name];?> :</h3>

<?php $donneees = $affich->fetch()
?>
<div class="row m-3">
  <div class="col-6">Contact :</div>
  <div class="col-6"><?php echo $_GET[name];?></div>
</div>
<div class="row m-3">
  <div class="col-6">Nom de la société :</div>
  <div class="col-6"><?php echo $donneees["name_societe"];?></div>
</div>
<div class="row m-3">
  <div class="col-6">Email :</div>
  <div class="col-6"><?php echo $donneees["mail"];?></div>
</div>
<div class="row m-3">
  <div class="col-6">Phone :</div>
  <div class="col-6"><?php echo $donneees["n_tel"];?></div>
</div>

<?php $affich->closeCursor();?>
<h4>Contact pour les factures :</h4>
<div class="row m-3">
  <div class="col-6">N°facture</div>
  <div class="col-6">Date</div>
</div>

<?php
while ($donnees = $resultat->fetch())
{
?>
<div class="row m-3">
  <div class="col-6"><?= $donnees["n_facture"];?></div>
  <div class="col-6"><?= $donnees["date_facture"];?></div>
</div>
<?php
}
?>
</div>
<?php require 'footer.php';
?>
