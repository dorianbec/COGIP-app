<?php
if(isset($_POST["envoyer"])){

	if($bdd){
	
		echo('ok connecté');

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

		echo $name_user." ".$firstname_user." ".$pwd_user." ".$mail_user." ".$super_user." | ";

		$data=[
			'name_user'=>$name_user,
			'firstname_user'=>$firstname_user,
			'pwd_user'=>$pwd_user,
			'mail_user'=>$mail_user,
			'super_user'=>$super_user
			];

		$sql="INSERT INTO `remi_user` (name_user,firstname_user,pwd_user,mail_user,super_user)
			VALUES (:name_user, :firstname_user, :pwd_user, :mail_user, :super_user)";

		$stmt= $bdd->prepare($sql);
		$stmt->execute($data);
	}
}

?>