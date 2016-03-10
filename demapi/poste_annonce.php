<!DOCTYPE html>

<html>
	<head>
		<meta charset = "utf-8"/>
		<title>DeMaPi</title>
	</head>
	
	<body>
		<?php include ('demapi_menus.php')?>
		<fieldset>
			<legend>Annonce</legend>
		<h2>Poster une nouvelle annonce !</h2>
		<form method = "post" action = "mes_annonces.php" enctype="multipart/form-data">
			<p>
				<label for = "avatar"><strong>Image du portable : </strong></label>
				<input type = "file" name = "avatar" id = "avatar"/>
				<br><br>
				<label for = "marque"><strong>Marque : </strong></label>
				<input type = "text" name = "marque" id = "marque" size = "10" maxlength="14" required = "required"/>
				<br><br>
				<label for = "modele"><strong>Modèle : </strong></label>
				<input type = "text" name = "modele" id = "modele" size = "10" maxlength="10" required = "required"/>
				<br><br>
				<label for = "prix"><strong>Prix : </strong></label>
				<input type = "text" name = "prix" id = "prix" size = "10" maxlength="6" required = "required"/> €
				<br><br>
				<label for = "etat"><strong>Etat : </strong></label>
				<select name = "etat" id = "etat">
					<option value = "neuf">Neuf</option>
					<option value = "occasion">Occasion</option>
				</select>
				<br><br>
				<label for = "telephone"><strong>Téléphone : </strong></label><br>
				<input type = "tel" name = "telephone" id = "telephone" size = "10" maxlength = "10" required = "required"/>
				<br><br>
				<label for = "commentaire"><strong>Commentaire : </strong></label><br>
				<textarea name = "commentaire" id = "commentaire" rows = "4" col = "20" placeholder = "Entrez un commentaire pour faciliter sa publicité !"></textarea>
				<br><br>
				<label for = "id_membre"><strong>Numéro du membre : </strong></label>
				<input type = "text" name = "id_membre" id = "id_membre" />
				<br><br>
				<input type = "reset" value = "Annuler"/>
				<input type = "submit" value = "Poster"/> 
			</p>
		
		</form>
	</fieldset>
	</body>


</html>