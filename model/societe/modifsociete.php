<?php
$message="";
/////////affiche les factures modifiables
$req = $bdd->query('SELECT * FROM remi_societe');

/////////selectionne les champs de valeur=au get
$affich = $bdd->prepare("SELECT * FROM remi_societe WHERE name_societe=:name_societe");
$affich->execute(array(
'name_societe'=> $_GET['name_societe']
));

////////////partie UPDATE
if(isset($_POST["envoyer"])){
///////////place les valeurs entrees par l'utilisateur dans une variable
        $nvn_pays = htmlspecialchars($_POST['n_pays']);
        $nvn_tel = htmlspecialchars($_POST['n_tel']);
        $nvn_tva = htmlspecialchars($_POST['n_tva']);
        $nvtype_societe = htmlspecialchars($_POST['type_societe']);
///////////fonction qui verifie que les champs pas vides par le phrase placeholder
function verif_null($var){
      if($var!=""
    && $var!="modifier le pays"
    && $var!="modifier le n° de tel"
    && $var!="modifier le n° de tva"
    && $var!="modifier le type de societe"
    ){
           return $var;
        }
  else{echo"veuillez compléter les vides";}
}

////////////on active la fontion pour chaq variable/si verif null=true alors fait ect
if(verif_null($nvn_pays)
          && verif_null($nvn_tel)
          && verif_null($nvn_tva)
          && verif_null($nvtype_societe)
        )
        {
$nvname_societe = $_GET['name_societe'];
$message = "La societe ".$nvname_societe." a ete modifiée";
echo "nom de société est : ".$nvname_societe;


  $requete=$bdd->prepare('UPDATE remi_societe
          SET n_pays=:n_pays, n_tel=:n_tel, n_tva=:n_tva, type_societe=:type_societe
          WHERE name_societe=:name_societe');
  $requete->execute(array(
                          'n_pays'=> $nvn_pays,
                          'n_tel'=> $nvn_tel,
                          'n_tva'=> $nvn_tva,
                          'type_societe'=> $nvtype_societe,
                          'name_societe'=> $_GET['name_societe']
                        ));
}}
?>