<div class="container">
  <div class="row">
        <br>
    	<div class="col-12"><h2 class="text-center">Ajouter d'un utilisateur</h2></div>
  </div>

<section>
  <div class ="row">
	<div class="col-6">
      
	<form action="#" method="post" id="adduser">
				
				<div class="form-group">
					<label for="name_user">Nom de l'utilisateur :</label>		
					<input class="form-control" name="name_user" type="text" placeholder="Inscrivez ici le nom de l'utilisateur">
				</div>
				<div class="form-group">
					<label for="firstname_user">Prénom de l'utilisateur :</label>		
					<input class="form-control" name="firstname_user" type="text" placeholder="Inscrivez ici le prénom de l'utilisateur">
				</div>
				<div class="form-group">
					<label for="pwd_user">Mot de passe :</label>		
					<input class="form-control" name="pwd_user" type="text" placeholder="Inscrivez ici le mot de passe">
				</div>
				<div class="form-group">
					<label for="mail_user">Mail :</label>		
					<input class="form-control" name="mail_user" type="text" placeholder="Inscrivez ici le Mail">
				</div>
				<div class="form-group">
	    				<label for="super_user">Type :</label>
		    			<select name="super_user">
		      				<option>admin</option>
		      				<option>modérateur</option>
		    			</select>
	  			</div>
                <button type="submit" name="envoyer" class="btn btn-primary">Envoyer</button>
			</form>

	</div>

  </div>
</section>