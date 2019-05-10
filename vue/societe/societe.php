<div class="container">
  <div class="row">
    	<div class="col-12"><h2 class="text-center">Annuaire des sociétés</h2></div>
  </div>

<section class="fromsociete">
  <div class ="row">
      <div class="col-12"><h3>Clients</h3></div>
      <div class ="col-3">Nom de société :</div>
      <div class ="col-3">N° de TVA :</div>
      <div class ="col-3">Pays :</div>
  </div>

<?php
while ($clien = $client->fetch())//tant qu'il y a un resultat
{?>
  <div class ="row">
      <div class ="col-3"><?php echo $clien['name_societe']?></div>
      <div class ="col-3"><?php echo $clien ['n_tva']?></div>
      <div class ="col-3"><?php echo $clien ['n_pays']?></div>
      <div class="col-1"><a href="?page=societe&action=detailsociete&name_societe=<?= $clien['name_societe'];?>"><button type="button" class="btn btn-info">details</button></a></div>
      <div class="col-1"><a href="?page=societe&action=modifsociete&name_societe=<?= $clien['name_societe'];?>"><button type="button" class="btn btn-success">modifier</button></a></div>
      <div class="col-1"><a href="?page=societe&action=supsociete&name_societe=<?= $clien['name_societe'];?>"><button type="button" class="btn btn-danger">suprimer</button></a></div>
      <br/>
      <br/>
  </div>

<?php
}
?>
</section>
<section class="fromsociete">
  <div class ="row">
      <div class="col-12"><h3>Fournisseurs</h3></div>
      <div class ="col-3">Nom de société :</div>
      <div class ="col-3">N° de TVA :</div>
      <div class ="col-3">Pays :</div>
  </div>

<?php
while ($fournis = $fournisseur->fetch())//tant qu'il y a un resultat
{
?>
  <div class ="row">
      <div class ="col-3"><?php echo $fournis ['name_societe']?></div>
      <div class ="col-3"><?php echo $fournis ['n_tva']?></div>
      <div class ="col-3"><?php echo $fournis ['n_pays']?></div>
      <div class="col-1"><a href="?page=societe&action=detailsociete&name_societe=<?= $fournis['name_societe'];?>"><button type="button" class="btn btn-info">details</button></a></div>
      <div class="col-1"><a href="?page=societe&action=modifsociete&name_societe=<?= $fournis['name_societe'];?>"><button type="button" class="btn btn-success">modifier</button></a></div>
      <div class="col-1"><a href="?page=societe&action=supsociete&name_societe=<?= $fournis['name_societe'];?>"><button type="button" class="btn btn-danger">suprimer</button></a></div>
      <br/>
      <br/>
  </div>

<?php
}
?>
</section>
<div class="col-1"><a href="?page=societe&action=ajoutsociete"><button type="button" class="btn btn-succes">ajouter +</button></a></div>
<style>
	.container h2{margin-top:20px;}
	.fromsociete{margin-top:30px;}
	.fromsociete .row{min-height:25px;}
</style>
</div>
