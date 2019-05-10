<?php
	//si le nom est présent dans l'url
	if(isset($_GET['name'])){
			//active la requete du contact sélectionnée
  			$donneees = $affich->fetch()
?>
<div class="container">
<div class ="row">
      <div class ="col-2"><?= $donnees['name'].' '.$donnees['first_name'];?></div>
      <div class ="col-2"><?php echo $donnees ['n_tel']?></div>
      <div class ="col-2"><?php echo $donnees ['mail']?></div>
      <div class ="col-2"><?php echo $donnees ['name_societe']?></div>
    </div>  
<?php
	// fin de requete d'affichage des données dans le formulaire
	$affich->closeCursor();
?>

   <div class="col-6">
  		<form action="#" method="post">
        			<div class="form-group">
					<label for="nom">Nom :</label>
					<input class="form-control" name="nom" type="text" placeholder="modifier le nom">
				</div>
				<div class="form-group">
					<label for="first_name">Prénom :</label>
					<input class="form-control" name="first_name" type="text" placeholder="modifier le prénom">
				</div>
				<div class="form-group">
					<label for="n_tel">Téléphone : (10 chiffres max.)</label>
					<input class="form-control" name="n_tel" type="int" placeholder="modifier le n° de tel.">
				</div>
        			<div class="form-group">
					<label for="mail">E-mail :</label>
					<input class="form-control" name="mail" type="text" placeholder="modifier l'e-mail">
				</div>
          		<button type="submit" name="envoyer" class="btn btn-primary">Envoyer</button>
		</form>
        </div>
<?php
	}
?>
      </div>
    </div>
<style>
	.container h2{margin-top:20px;}
	.fromsociete{margin-top:30px;}
	.fromsociete .row{min-height:25px;}
</style>
