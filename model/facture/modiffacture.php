<?php
/////////affiche les factures modifiables
$req = $bdd->query('SELECT * FROM remi_facture');

/////////selectionne les champs de valeur=au get
$affich = $bdd->prepare("SELECT * FROM remi_facture WHERE n_facture=:n_facture");
$affich->execute(array(
'n_facture'=> $_GET['n_facture']
));

////////////partie UPDATE
if(isset($_POST["envoyer"])){
///////////place les valeurs entrees par l'utilisateur dans une variable
        $nvdate_facture = htmlspecialchars($_POST['date_facture']);
        $nvdate_prestation = htmlspecialchars($_POST['date_prestation']);
        $nvname_societe = htmlspecialchars($_POST['name_societe']);
        $nvname_contact = htmlspecialchars($_POST['name_contact']);

///////////fonction qui verifie que les champs pas vides par le phrase placeholder
function verif_null($var){
      if($var!=""
    && $var!="modifier la date facture"
    && $var!="modifier la date prestation"
    && $var!="modifier le nom societe"
    && $var!="modifier le nom contact"
    ){
           return $var;
        }
  else{echo"veuillez compléter les vides";}
}

////////////on active la fontion pour chaq variable/si verif null=true alors fait ect
if(verif_null($nvdate_facture)
          && verif_null($nvdate_prestation)
          && verif_null($nvname_societe)
          && verif_null($nvname_contact)
        )
        {
$message = "La facture dont la societe est ".$nvname_societe." est modifiée";



          $requete=$bdd->prepare('UPDATE remi_facture
          SET date_facture=:date_facture, date_prestation=:date_prestation, name_societe=:name_societe, name_contact=:name_contact
          WHERE n_facture=:n_facture');
  $requete->execute(array(
                          'date_facture'=> $nvdate_facture,
                          'date_prestation'=> $nvdate_prestation,
                          'name_societe'=> $nvname_societe,
                          'name_contact'=> $nvname_contact,
                          'n_facture'=> $_GET['n_facture']
                        ));
}}
?>