<div class="container">
  <div class="row">
    <div class="col-12"><h2 class="text-center">Annuaire des contacts</h2></div>
  </div>
<?php
while ($donnees = $resultat->fetch())//tant qu'il y a un resultat
{?>
  <div class ="row">
      <div class ="col-2"><?= $donnees['name'].' '.$donnees['first_name'];?></div>
      <div class ="col-2"><?php echo $donnees ['n_tel']?></div>
      <div class ="col-2"><?php echo $donnees ['mail']?></div>
      <div class ="col-2"><?php echo $donnees ['name_societe']?></div>
      <div class="col-1"><a href="?page=contact&action=detailcontact&name=<?= $donnees["name"];?>&first_name=<?= $donnees["first_name"];?>"><button type="button" class="btn btn-info">details</button></a></div>
      <div class="col-1"><a href="?page=contact&action=modifcontact&name=<?= $donnees["name"];?>"><button type="button" class="btn btn-success">modifier</button></a></div>
      <div class="col-1"><a href="?page=contact&action=supcontact&name=<?= $donnees['name'];?>"><button type="button" class="btn btn-danger">suprimer</button></a></div>
    </div>                
    <br />
<?php
}?>
  </div>
  <div class="col-2 offset-10"><a href="?page=contact&action=ajoutcontact"><button type="button" class="btn btn-primary">+ Ajouter</button></a></div>