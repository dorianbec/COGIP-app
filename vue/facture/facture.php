<h3 class="text-center">COGIP : Listing facture</h3>
<div class="row m-3">
  <div class="col-2">N°facture</div>
  <div class="col-2">Date</div>
  <div class="col-2">Société</div>
  <div class="col-2">Type</div>
</div>
<?php
while ($donnees = $resultat->fetch())
{
?>
<div class="row m-3">
  <div class="col-2">
  <?= $donnees['n_facture'];?>
</div>

  <div class="col-2"><?= $donnees["date_facture"];?></div>
  <div class="col-2"><?php if($donnees["name_societe"]==""){
    echo "Socièté supprimée";
  }
  else{
    echo $donnees["name_societe"];
  }?></div>
  <div class="col-2"><?php if($donnees["type_societe"]==""){
    echo "Socièté supprimée";
  }
  else{
    echo $donnees["type_societe"];
  }?></div>
    <div class="col-1"><a href="?page=facture&action=detailfacture&n_facture=<?= $donnees['n_facture'];?>"><button type="button" class="btn btn-info">details</button></a></div>
    <div class="col-1"><a href="?page=facture&action=modiffacture&n_facture=<?= $donnees['n_facture'];?>"><button type="button" class="btn btn-success">modifier</button></a></div>
    <div class="col-1"><a href="?page=facture&action=supfacture&n_facture=<?= $donnees['n_facture'];?>"><button type="button" class="btn btn-danger">suprimer</button></a></div>

</div>
<?php
}
?>
<div class="row">
<div class="col-2 offset-10"><a href="?page=facture&action=ajoutfacture"><button type="button" class="btn btn-primary">+ Ajouter</button></a></div>
</div>
