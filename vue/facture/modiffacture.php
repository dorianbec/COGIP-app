<?php if(isset($_GET['n_facture'])){
  $donneees = $affich->fetch()
  ?>
  <div class="row">
    <div class="col-2 offset-5">
      <h3>Facture à modifier</h3>
    </div>
  </div>
  <div class="container">
  <div class="row">
    <div class="col-6">
  <div class="row m-3">
   <div class="col">Numero de facture :</div>
   <div class="col"><?php echo $donneees["n_facture"];?></div>
  </div>
  <div class="row m-3">
   <div class="col">Date facture :</div>
   <div class="col"><?php echo $donneees["date_facture"];?></div>
  </div>
  <div class="row m-3">
   <div class="col">Date prestation :</div>
   <div class="col"><?php echo $donneees["date_prestation"];?></div>
  </div>
  <div class="row m-3">
   <div class="col">Nom société :</div>
   <div class="col"><?php echo $donneees["name_societe"];?></div>
  </div>
  <div class="row m-3">
   <div class="col">Nom contact :</div>
   <div class="col"><?php echo $donneees["name_contact"];?></div>
  </div>
</div>
<div class="col-6">
  <form action="#" method="post">
				<div class="form-group">
					<label for="date facture">date facture :</label>
					<input class="form-control" name="date_facture" type="text" placeholder="<?php echo $donneees["date_facture"];?>">
				</div>
				<div class="form-group">
					<label for="date prestation">date prestation :</label>
					<input class="form-control" name="date_prestation" type="text" placeholder="<?php echo $donneees["date_prestation"];?>">
				</div>
        <div class="form-group">
					<label for="nom societe">nom societe :</label>
					<input class="form-control" name="name_societe" type="text" placeholder="<?php echo $donneees["name_societe"];?>">
				</div>
        <div class="form-group">
					<label for="nom client">nom client :</label>
					<input class="form-control" name="name_contact" type="text" placeholder="<?php echo $donneees["name_contact"];?>">
				</div>
          <button type="submit" name="envoyer" class="btn btn-primary">Envoyer</button>
        </form>
        </div>
      </div>
    </div>
<?php
echo $message; }
?>
