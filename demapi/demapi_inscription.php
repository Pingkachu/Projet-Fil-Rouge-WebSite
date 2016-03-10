<!DOCTYPE html>

<html>
	<head>
		<meta charset = "utf-8" />
		<title>DeMaPi</title>
		<link rel = "stylesheet" href = "demapi_inscription.css" />
	</head>
	
	<body>
		
			<div id = "entete_inscription">
				<img src = "images/logo_demapi.png" />
			</div>
		
		
			
			<fieldset>
				<legend>Inscription</legend>
			
				<h2>Devenir membre !</h2>
				<p>Remplissez ce formulaire pour vous inscrire sur DeMaPi<p>
				
				<form method = "post" action = "nouveau_membre.php">
					<label for = "nom_membre"><strong>Nom : </strong></label>
					<input type = "text" name = "nom_membre" id = "nom_membre" size = "30" required = "required" />
					<br><br>
					<label for = "prenom_membre"><strong>Prénom : </strong></label>
					<input type = "text" name = "prenom_membre" id = "prenom_membre" size = "26" required = "required" />
					<br><br>
					<label for = "pseudo_membre"><strong>Pseudo : </strong></label>
					<input type = "text" name = "pseudo_membre" id = "pseudo" size = "27" required = "required" />
					<br><br>
					<label for = "adresse_mail"><strong>Adresse Mail : </strong></label>
					<input type = "mail" name = "adresse_mail" id = "adresse_mail" required = "required"/>
					<br><br>
					<label for = "mot_de_passe"><strong>Mot de Passe : </strong></label>
					<input type = "password" name = "mot_de_passe" id = "mot_de_passe" required = "required"/>
					<br><br>
					<label for = "telephone"><strong>Téléphone : </strong></label>
					<input type = "text" name = "telephone" id = "telephone" size = "23"/>
					<br><br>
					
					<input id = "annuler" type = "reset" value = "Effacer le formulaire"/>
					<input id = "valider" type = "submit" value = "Valider"/>
					
				</form>
				
			</fieldset>
				<p class = "nota_bene"><strong>NB:</strong> Veuillez renseigner les informations exactes afin de faciliter la tâche
				à DeMaPi en cas de livraison d'un portable. Merci !</p><br>
				
				<footer>
					<p><strong><em>2016 Copyright, tous droits réservés !</em><strong></p>
				</footer>
	
	
	</body>

</html>