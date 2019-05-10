<section>
  <div class ="row ml-5 mt-5">

	<form action="#" method="post">
        <div class="form-group">
					<label for="nom">Nom :</label>
					<input class="form-control" name="name" type="text" placeholder="votre nom ">
				</div>
				<div class="form-group">
					<label for="prenom">Prénom :</label>
					<input class="form-control" name="first_name" type="text" placeholder="votre prénom">
				</div>
				<div class="form-group">
					<label for="numtel">Téléphone :</label>
					<input class="form-control" name="n_tel" type="int" placeholder="votre n° de tel">
				</div>
        <div class="form-group">
					<label for="mail">Mail :</label>
					<input class="form-control" name="mail" type="text" placeholder="votre email">
				</div>

        <div class="form-group">
	    				<label for="text">Société :</label>
		    			<select name="name_societe">
                <option>choix</option>
                <?php while ($donnees = $req->fetch()){ ?>

		      				<option><?= $donnees['name_societe']?></option>
                <?php
                }
                ?>
		    			</select>
	  			</div>
        <button type="submit" name="envoyer" class="btn btn-primary">Envoyer</button>
			</form>
<?php echo $message; ?>

  </div>
</section>
