<?php
  if($session_start == true){ 
    ?>
      <div class="container">
        <div class="row">
          <div class="col-3">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ajouter +
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="index.php"></a>
                <a class="dropdown-item" href="index.php?page=ajoutcontact.php">contact</a>
                <a class="dropdown-item" href="#">facture</a>
                <a class="dropdown-item" href="index.php?page=addsociete.php">société</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
  };
?>
<br>
<div class="container">
  <div class="row">
    <div class="col-12">
      <h3>
        Dernières factures :
      </h3>
    </div>
    <div class="col-3">
    Numéro de facture
    </div>
    <div class="col-3">
    Date de facture
    </div>
    <div class="col-3">
    Nom de la société
    </div>
  </div>
  <br>
  <?php
  while ($donnees_facture = $resultat_facture->fetch())//tant qu'il y a un resultat
  {
  ?>
  <div class="row">
    <div class="col-3">
    <?php echo $donnees_facture['n_facture'] ?>
    </div>
    <div class="col-3">
    <?php echo $donnees_facture['date_facture'] ?>
    </div>
    <div class="col-3">
    <?php echo $donnees_facture['name_societe'] ?>
    </div>
  </div>
  <?php
  }
  ?>
  <br>
    <div class="row">
      <div class="col-12">
        <h3>
          Derniers contacts :
        </h3>
      </div>
      <div class="col-3">
      Nom
      </div>
      <div class="col-3">
      Téléphone
      </div>
      <div class="col-3">
      E-mail
      </div>
      <div class="col-3">
      Société
      </div>
    </div>
    <br>
  <?php
  while ($donnees_contact = $resultat_contact->fetch())//tant qu'il y a un resultat
  {
  ?>
  <div class="row">
      <div class="col-3">
      <?php echo $donnees_contact['name'] ?>
      </div>
      <div class="col-3">
      <?php echo $donnees_contact['n_tel'] ?>
      </div>
      <div class="col-3">
      <?php echo $donnees_contact['mail'] ?>
      </div>
      <div class="col-3">
      <?php echo $donnees_contact['name_societe'] ?>
      </div>
  </div>
  <?php
  }
  ?>
  <br>
    <div class="row">
      <div class="col-12">
        <h3>
          Dernières sociétés :
        </h3>
      </div>
      <div class="col-3">
      Nom de la société
      </div>
      <div class="col-3">
      T.V.A.
      </div>
      <div class="col-3">
      Pays
      </div>
      <div class="col-3">
      Type
      </div>
    </div>
  <br>
  <?php
  while ($donnees_societe = $resultat_societe->fetch())//tant qu'il y a un resultat
  {
  ?>
    <div class="row">
      <div class="col-3">
      <?php echo $donnees_societe['name_societe'] ?>
      </div>
      <div class="col-3">
      <?php echo $donnees_societe['n_tva'] ?>
      </div>
      <div class="col-3">
      <?php echo $donnees_societe['n_pays'] ?>
      </div>
      <div class="col-3">
      <?php echo $donnees_societe['type_societe'] ?>
      </div>
    </div>
  <?php
  }
  ?>
</div>