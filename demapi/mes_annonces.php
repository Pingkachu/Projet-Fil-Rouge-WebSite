

<!DOCTYPE html>

<html>
	<head>
	
	</head>
	
	<body>
		<?php include ('demapi_menus.php'); ?>
		
		<?php
			try
			{
				$bdd = new PDO('mysql:localhost;dbname=demapi;charset=utf8', 'root', '',
				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			}
			catch(Exception $e)
			{
				die('Erreur : '.$e->getMessage());
			}
			
			$resultat = $bdd->query('SELECT * FROM demapi.annonces');
			
			while($donnees = $resultat->fetch())
			{
?>
				<aside class = "annonce">
						<img src = "images/5.nokiaLumia735.jpg" alt = "Nokia Lumia 735"/>
						<p class="description">
							<Strong><?php echo 'Marque : ';?></strong><?php $donnees['marque'].'<br/>';?>
							<Strong><?php echo 'Modèle : ';?></strong><?php $donnees['modele'].'<br/>';?>
							<Strong><?php echo 'Prix : ';?></strong><?php $donnees['prix'].'<br/>';?>
							<Strong><?php echo 'Etat : ';?></strong><?php $donnees['etat'].'<br/>';?>
							<Strong><?php echo 'Commentaire : ';?></strong><?php $donnees['commentaire'].'<br/>';?>
						</p>
						<p class = "details">
							<a href = "details_annonce.php">Voir Détails<a/>
						</p>
				</aside>

<?php	
				
			}
			
			/*$resultat = $bdd->query('INSERT INTO demapi.annonces(id_annonce, marque, modele, prix, etat, commentaire,
			date_annonce, id_membre) VALUES('', 'Motorola', 'v3i', 31, 'Occasion', 'un vieux portable', date(d-m-y), 1)');
			/*$req = $bdd->prepare('INSERT INTO demapi.annonces(marque, modele, prix, etat, commentaire, date_annonce,
			id_membre) VALUES (:marque, :modele, :prix, :etat, :commentaire, :date_annonce, :id_membre)');
			
			$req->execute(array('marque'=>$_POST['marque'],
							'modele' =>$_POST['modele'],
							'prix'   =>$_POST['prix'],
							'etat'   =>$_POST['etat'],
							'commentaire'=>$_POST['commentaire'],
							'date_annonce'=>$_POST['date_annonce'],
							'date_annonce'=> date(),
							'annonces.id_membre'=>$_POST['id_membre']));*/
							
			echo 'Vous avez ajouté une nouvelle annonce !';
			
			$resultat = $bdd->query('SELECT * FROM demapi.annonces');
		?>
		<br><h2>Nouvelle Liste des annonces</h2><br>
	<?php
		while($donnees = $resultat->fetch())
		{
?>
		<p class = "new_annonce">
			Annonce n°<?php echo $donnees['id_annonce'];?>:
			 <?php echo $donnees['marque'].','.$donnees['modele'].','.$donnees['prix'].','.$donnees['date_annonce'];
			 ?>
		</p>
<?php			
		}
		$resultat->closeCursor();
	?>
	
<?php
		$resultat1 = $bdd->query('SELECT * FROM demapi.annonces WHERE id_membre = 1');
		$donnees1 = $resultat1->fetch();
?>
		<br><br><h2>Les annonces de <?php echo $donnees1['nom_utilisateur'];?></h2><br>
<?php
		while($donnees1 = $resultat1->fetch())
		{
	?>		
			<p class = "new_annonce">
			Annonce n°<?php echo $donnees['id_annonce'];?>:
			 <?php echo $donnees['marque'].','.$donnees['modele'].','.$donnees['prix'];
			 ?>
		</p>
<?php
		}
		$resultat1->closeCursor();
?>		
		<!--<form method = "post" action = "connector2.php">
			<label for = "possesseur">Entrez le possesseur : </label>
			<input type = "text" name = "possesseur" id = "possesseur" size = "20"/>
			<input type = "submit" value = "Ok"/>
		</form>
		-->
	</body>

</html>