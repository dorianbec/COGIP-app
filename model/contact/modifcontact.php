<?php
// récupère valeur name depuis l'url
$namar= filter_var($_GET['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$nomer = substr($namar, 0, 30);
echo "name : ".$nomer;

// requete pour afficher les contacts modifiables
$req = $bdd->query('SELECT * FROM remi_contact');

// requete pour afficher les données du contact sélectionné
$affich = $bdd->prepare("SELECT * FROM remi_contact WHERE name=:name");
$affich->execute(array(
	'name'=> $nomer
));

$message="";

// partie UPDATE
if(isset($_POST["envoyer"])){

	// place les valeurs entrees par l'utilisateur dans une variable

        $nvnamo = filter_var($_POST['nom'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$nvname = substr($nvnamo, 0, 20);

        $nvfirst_namo = filter_var($_POST['first_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$nvfirst_name = substr($nvfirst_namo, 0, 20);

        $nvn_telo = filter_var($_POST['n_tel'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$nvn_tel = substr($nvn_telo, 0, 10);

        $nvmailo = filter_var($_POST['mail'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$nvmail = substr($nvmailo, 0, 30);



	// fonction qui verifie que les champs pas vides par le phrase placeholder
	function verif_null($var){
	      if($var!=""
	    	&& $var!="modifier le nom"
	    	&& $var!="modifier le prenom"
	    	&& $var!="modifier le n° de tel."
	    	&& $var!="modifier l'e-mail"
	        ){return $var;}
	      else{echo"veuillez compléter les vides";}
	}

	// on active la fontion pour chaque variable/si verif null=true alors fait active la requette

	if(verif_null($nvname) && verif_null($nvfirst_name) && verif_null($nvn_tel) && verif_null($nvmail)){
    		//echo "nomer egal ".$nomer." | ";

    		$message="<br> nvname".$nvname." nvfirst_name ".$nvfirst_name." nvn_tel ".$nvn_tel." nvmail ".$nvmail."<br>";
    		//echo $message;var_dump($bdd);

		$datar=[
		      'nvname'=> $nvname,
		      'nvfirst_name'=> $nvfirst_name,
		      'nvn_tel'=> $nvn_tel,
		      'nvmail'=> $nvmail,
		      'id'=> $_GET['id']];

          $qler="UPDATE remi_contact
		    SET name=:name, first_name=:first_name, n_tel=:n_tel, mail=:mail
		    WHERE id=:id";

	        $requete=$bdd->prepare($qler);
	        $requete->execute($datar);


		echo"envoi vers la DB";
         }
	else{
		$message ="Veuillez remplir les champs pour modifier un contact";
	}

}

?>