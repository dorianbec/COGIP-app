<?php

$resultat = $bdd->query('SELECT * FROM `remi_user`');
$donnees = $resultat->fetch();
/////////affiche les factures modifiables
$req = $bdd->query('SELECT * FROM remi_user');

/////////selectionne les champs de valeur=au get
$affich = $bdd->prepare("SELECT * FROM remi_user WHERE remi_user.id=:id");
$affich->execute(array(
'id'=> $_GET['id']
));
$user_id = $affich->fetch();
echo $user_id['id'];
////////////partie UPDATE
if(isset($_POST["modifier"])){
///////////place les valeurs entrees par l'utilisateur dans une variable
$name_user = htmlspecialchars($_POST["name_user"], ENT_NOQUOTES);
$name_user = substr($name_user, 0, 15);

$firstname_user = htmlspecialchars($_POST["firstname_user"], ENT_NOQUOTES);
$firstname_user = substr($firstname_user, 0, 15);

$pwd_user = htmlspecialchars($_POST["pwd_user"], ENT_NOQUOTES);
$pwd_user = substr($pwd_user, 0, 15);

$mail_user = htmlspecialchars($_POST["mail_user"], ENT_NOQUOTES);
$mail_user = substr($mail_user, 0, 30);

$super_user = htmlspecialchars($_POST["super_user"], ENT_NOQUOTES);
$super_user = substr($super_user, 0, 15);

///////////fonction qui verifie que les champs pas vides par le phrase placeholder
function verif_null($var){
      if($var!=""
    && $var!=$name_user
    && $var!=$firstname_user
    && $var!=$pwd_user
    && $var!=$mail_user
    && $var!=$super_user
    ){
           return $var;
        }
  else{echo"veuillez compléter les vides";}
}

////////////on active la fontion pour chaq variable/si verif null=true alors fait ect
if(verif_null($name_user)
          && verif_null($firstname_user)
          && verif_null($pwd_user)
          && verif_null($mail_user)
          && verif_null($super_user)
        )
        {
$message = "L utilisateur ".$name_user." est modifiée";



          $requete=$bdd->prepare('UPDATE remi_user
          SET name_user=:name_user, firstname_user=:firstname_user, pwd_user=:pwd_user, mail_user=:mail_user, super_user=:super_user
          WHERE id=:id');
  $requete->execute(array(
                          'name_user'=> $name_user,
                          'firstname_user'=> $firstname_user,
                          'pwd_user'=> $pwd_user,
                          'mail_user'=> $mail_user,
                          'super_user'=> $super_user,
                          'id'=> $_GET['id']
                        ));
}}
?>