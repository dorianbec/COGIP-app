<div class="container">
  <div class="row">
        <br>
    	<div class="col-12"><h2 class="text-center">modification d'un utilisateur</h2></div>
  </div>

<section>
  <div class ="row">
	<div class="col-6">
      
	<form action="#" method="post" id="modifuser">
				
				<div class="form-group">
					<label for="name_user">Nom de l'utilisateur :</label>		
					<input class="form-control" name="name_user" type="text" placeholder="<?= $user_id["name_user"];?>">
				</div>
				<div class="form-group">
					<label for="firstname_user">Prénom de l'utilisateur :</label>		
					<input class="form-control" name="firstname_user" type="text" placeholder="<?= $user_id["firstname_user"];?>">
				</div>
				<div class="form-group">
					<label for="pwd_user">Mot de passe :</label>		
					<input class="form-control" name="pwd_user" type="text" placeholder="<?= $user_id["pwd_user"];?>">
				</div>
				<div class="form-group">
					<label for="mail_user">Mail :</label>		
					<input class="form-control" name="mail_user" type="text" placeholder="<?= $user_id["mail_user"];?>">
				</div>
				<div class="form-group">
	    				<label for="super_user">L'utilisateur a les droit suivant (<?= $user_id["super_user"];?>) vous pouvez les changer si dessous:</label>
		    			<select name="super_user">
		      				<option>admin</option>
		      				<option>modérateur</option>
		    			</select>
	  			</div>
                <button type="submit" name="modifier" class="btn btn-primary">Envoyer</button>
			</form>

	</div>

  </div>
</section>