<?php
if(isset($_GET['name_societe'])){
  $donneees = $affich->fetch()
  ?>
  <div class="col-12"><h3 class="text-center">Societe à modifier</h3>
  </div>
  <div class="container">
  <div class="row">
    <div class="col-6">
  <div class="row m-3">
   <div class="col">Nom de la societe :</div>
   <div class="col"><?php echo $donneees["name_societe"];?></div>
  </div>
  <div class="row m-3">
   <div class="col">pays :</div>
   <div class="col"><?php echo $donneees["n_pays"];?></div>
  </div>
  <div class="row m-3">
   <div class="col">tel :</div>
   <div class="col"><?php echo $donneees["n_tel"];?></div>
  </div>
  <div class="row m-3">
   <div class="col">tva :</div>
   <div class="col"><?php echo $donneees["n_tva"];?></div>
  </div>
  <div class="row m-3">
   <div class="col">type :</div>
   <div class="col"><?php echo $donneees["type_societe"];?></div>
  </div>
</div>
<div class="col-6">
  <form action="#" method="post">
        <div class="form-group">
					<label for="nom societe"></label>
					<input class="form-control" name="name_societe" type="hidden">
				</div>
				<div class="form-group">
					<label for="pays">pays :</label>
					<input class="form-control" name="n_pays" type="text" placeholder="<?php echo $donneees["n_pays"];?>">
				</div>
				<div class="form-group">
					<label for="tel">tel :</label>
					<input class="form-control" name="n_tel" type="text" placeholder="<?php echo $donneees["n_tel"];?>">
				</div>
        <div class="form-group">
					<label for="tva">tva :</label>
					<input class="form-control" name="n_tva" type="text" placeholder="<?php echo $donneees["n_tva"];?>">
				</div>
        <div class="form-group">
	    				<label for="text">Type :</label>
		    			<select name="type_societe">
                <option>client</option>
                <option>fournisseur</option>
		    			</select>
	  			</div>
          <button type="submit" name="envoyer" class="btn btn-primary">Envoyer</button>
        </form>
        </div>
      </div>
    </div>
<?php
echo $message; }
?>
