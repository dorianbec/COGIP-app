<div class="container">
  <div class="container">
    <h3 class="text-center">COGIP : Listing facture</h3>
    <div class="row m-3">
      <div class="col-2"><h4>nom</h4></div>
      <div class="col-2"><h4>prénom</h4></div>
      <div class="col-2"><h4>mail</h4></div>
  </div>
<?php
while ($donnees = $resultat->fetch())
{
?>
  <div class="row m-3">
    <div class="col-2"><?= $donnees["name_user"];?></div>
    <div class="col-2"><?= $donnees["firstname_user"];?></div>
    <div class="col-2"><?= $donnees["mail_user"];?></div>
    <div class="col-2"><a href="?page=user&action=deluser&id=<?= $donnees["id"];?>"><button type="button" class="btn btn-danger">suprimer</button></a></div>
    <div class="col-2"><a href="?page=user&action=modifuser&id=<?= $donnees["id"];?>"><button type="button" class="btn btn-success">modifier</button></a></div>
  </div>
<?php
}
?>
<div class="col-2 offset-10"><a href="?page=user&action=inscription"><button type="button" class="btn btn-primary">+ Ajouter</button></a></div>
</div>