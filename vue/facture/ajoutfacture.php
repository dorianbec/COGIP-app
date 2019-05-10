<section>
  <h2>Ajout de facture</h2>
  <div class ="row ml-5 mt-5">

	<form action="#" method="post">
        <div class="form-group">
					<label for="n_facture">Numero facture :</label>
					<input class="form-control" name="n_facture" type="text" placeholder="n facture ">
				</div>
				<div class="form-group">
					<label for="date_facture">date prestation :</label>
					<input class="form-control" name="date_facture" type="text" placeholder="date facture aaaa-mm-yy">
				</div>
        <div class="form-group">
					<label for="date_prestation">date facture :</label>
					<input class="form-control" name="date_prestation" type="text" placeholder="date prestation aaaa-mm-yy">
				</div>
        <div class="form-group">
	    				<label for="text">Société :</label>
		    			<select name="name_societe">
                <option>choix</option>
                <?php while ($donneees = $req->fetch()){ ?>

		      				<option><?= $donneees['name_societe']?></option>
                <?php
                }
                ?>
		    			</select>
	  			</div>
          <div class="form-group">
  					<label for="name_contact">nom contact :</label>
  					<input class="form-control" name="name_contact" type="text" placeholder="name contact">
  				</div>
				<button type="submit" name="envoyer" class="btn btn-primary">Envoyer</button>
			</form>

<?php echo $message;
?>
  </div>
</section>
