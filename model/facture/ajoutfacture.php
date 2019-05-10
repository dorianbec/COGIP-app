<?php
if(isset($_POST["envoyer"])){

  $valn_facture = htmlspecialchars($_POST['n_facture']);
  $valdate_facture = htmlspecialchars($_POST['date_facture']);
  $valdate_prestation = htmlspecialchars($_POST['date_prestation']);
  $valname_societe = htmlspecialchars($_POST['name_societe']);
  $valname_contact = htmlspecialchars($_POST['name_contact']);

///////////fonction qui verifie que les champs pas vides par default
function verif_null($var){
        if($var!=""
      && $var!="n facture"
      && $var!="date facture"
      && $var!="date prestation"
      && $var!="votre société"
      && $var!="name contact"
      ){
             return $var;
          }

        else{echo"veuillez compléter les vides";}
  }

  // si les champs ne sont pas vide ou de valeur par défaut active la requete vers la DB/active la fonction
  if(verif_null($valn_facture)
            && verif_null($valdate_facture)
            && verif_null($valdate_prestation)
            && verif_null($valname_societe)
            && verif_null($valname_contact)){
$message = "La facture ".$valn_facture." de la societe ".$valname_societe." est enregistrée";

$requete=$bdd->prepare('INSERT INTO remi_facture (n_facture, date_facture, date_prestation, name_societe, name_contact)
VALUES (:n_facture, :date_facture, :date_prestation, :name_societe, :name_contact)');
$requete->execute(array(
  'n_facture'=> $valn_facture,
  'date_facture'=> $valdate_facture,
  'date_prestation'=> $valdate_prestation,
  'name_societe'=> $valname_societe,
  'name_contact'=> $valname_contact
));
}}

$req = $bdd->query('SELECT * FROM remi_societe');
?>