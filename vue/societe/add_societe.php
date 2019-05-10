<div class="container">
  <div class="row">
    	<div class="col-12"><h2 class="text-center">Ajout d'une nouvelle société</h2></div>
  </div>

<section>
  <div class ="row">
	<div class="col-6">

	<form action="#" method="post" id="addsociete">

				<div class="form-group">
					<label for="nomsociete">Nom de la société :</label>
					<input class="form-control" name="nomsociete" type="text" placeholder="Inscrivez ici le nom de la société">
				</div>
				<div class="form-group">
					<label for="pays">Basé dans le pays :</label>
					<input class="form-control" name="pays" type="text" placeholder="Inscrivez ici le nom du pays">
				</div>
				<div class="form-group">
					<label for="numtva">Numéro de TVA (2 lettres, 10 chiffres):</label>
					<input class="form-control" name="numtva" type="text" placeholder="Inscrivez ici le n° de TVA">
				</div>
				<div class="form-group">
					<label for="numtel">Numéro de téléphone (15 chiffres max):</label>
					<input class="form-control" name="numtel" type="text" placeholder="Inscrivez ici le n° de tel.">
				</div>
				<div class="form-group">
	    				<label for="typer">Type :</label>
		    			<select name="typer">
						<option>Choix du type :</option>
		      				<option>client</option>
		      				<option>fournisseur</option>
		    			</select>
	  			</div>

				<button type="submit" name="envoyer" class="btn btn-primary">Envoyer</button>
			</form>
			<?php echo $message; ?>

	</div>

  </div>
</section>


</div>
