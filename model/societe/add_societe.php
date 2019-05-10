<?php
if(isset($_POST["envoyer"])){

	if($bdd){

		//convertit la valeur de nom avec des entités html pour les caractères spéciaux
		//ainsi que les quotes et double quotes
		//limite le nombre de caractère envoyé-> contre hacker
		$nomsocieteVal = htmlspecialchars($_POST["nomsociete"], ENT_NOQUOTES);
		$nomsocieteVal = substr($nomsocieteVal, 0, 30);

		$paysVal = htmlspecialchars($_POST["pays"], ENT_NOQUOTES);
		$paysv = substr($paysVal, 0, 20);

		$numtvaVal = htmlspecialchars($_POST["numtva"], ENT_NOQUOTES);
		$numtvav = substr($numtvaVal, 0, 15);

		$numtelVal = htmlspecialchars($_POST["numtel"], ENT_NOQUOTES);
		$numtelVal = substr($numtelVal, 0,15);

		$typerVal = htmlspecialchars($_POST["typer"], ENT_NOQUOTES);
		$typerVal = substr($typerVal, 0, 15);

		// fonction qui verifie si le champs est vide, ou placeholder par défaut
		function verif_null($var){
		    	if($var!=""
				&& $var!="Inscrivez ici nom de la société"
				&& $var!="Inscrivez ici le n° de TVA"
				&& $var!="Inscrivez ici le n° de tel."
				&& $var!="Inscrivez ici le nom du pays"
				&& $var!="Choix du type :"
				){
		    		   return $var;
		    		}
			else{echo"veuillez compléter les vides";}
		}

		// si les champs ne sont pas vide ou de valeur par défaut active la requete vers la DB
		if(verif_null($nomsocieteVal) && verif_null($paysVal) && verif_null($numtvaVal) && verif_null($numtelVal)){

			$message = "La société : ".$nomsocieteVal." dont le n°de TVA est : ".$numtvaVal.
				" au n°de téléphone : ".$numtelVal." de type : ".$typerVal." est créée";

			//prepare la requete avec d'autres nom de variable pour limiter les hacks
			//echo $nomsocieteVal." ".$paysVal." ".$numtvaVal." ".$numtelVal." ".$typerVal." | ";

			$data=[
				'societer'=>$nomsocieteVal,
				'payer'=>$paysVal,
				'teler'=>$numtelVal,
				'tver'=>$numtvaVal,
				'typerer'=>$typerVal
				];

			$sqler="INSERT INTO `remi_societe` (name_societe,n_pays,n_tel,n_tva,type_societe)
				VALUES (:societer, :payer, :teler,:tver,:typerer)";

			$stmt= $bdd->prepare($sqler);
			$stmt->execute($data);
		}

		else{$message ="Vueillez remplir les champs pour enregistrer une nouvelle société";}
		//header('location:add_societe.php');
	}

}
?>
