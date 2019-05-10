<?php
if(isset($_POST["envoyer"])){

        $valeurname = htmlspecialchars($_POST['name']);
        $valeurfirst_name = htmlspecialchars($_POST['first_name']);
        $valeurn_tel = htmlspecialchars($_POST['n_tel']);
        $valeurmail = htmlspecialchars($_POST['mail']);
        $valeurname_societe = htmlspecialchars($_POST['name_societe']);
///////////fonction qui verifie que les champs pas vides par default
function verif_null($var){
      if($var!=""
    && $var!="votre nom"
    && $var!="votre prénom"
    && $var!="votre n° de tel"
    && $var!="votre email"
    && $var!="choix"
    ){
           return $var;
        }
  else{echo"veuillez compléter les vides";}
}

// si les champs ne sont pas vide ou de valeur par défaut active la requete vers la DB
if(verif_null($valeurname)
          && verif_null($valeurfirst_name)
          && verif_null($valeurn_tel)
          && verif_null($valeurmail)
          && verif_null($valeurname_societe)){


  $message = "Le contact ".$valeurname." dont la societe ".$valeurname_societe." est créé";

  $requete=$bdd->prepare('INSERT INTO remi_contact (name, first_name, n_tel, mail, name_societe) VALUES (:name, :first_name, :n_tel, :mail, :name_societe)');
  $requete->execute(array(
                          'name'=> $valeurname,
                          'first_name'=> $valeurfirst_name,
                          'n_tel'=> $valeurn_tel,
                          'mail'=> $valeurmail,
                          'name_societe'=> $valeurname_societe
                        ));

                      }
                    }
$req = $bdd->query('SELECT * FROM remi_societe');

?>