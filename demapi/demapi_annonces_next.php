<!DOCTYPE html>

<html>
	<head>
		<meta charset = "utf-8"/>
		<title>DeMaPi</title>
		<link rel = "stylesheet" href = "demapi_annonces.css"/>
	</head>
	
	<body>
		<?php include ('demapi_menus.php');?>
		
		<section>
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
			
			$resultat = $bdd->query('SELECT * FROM demapi.annonces ORDER BY date_annonce LIMIT 4, 4');
			
			while($donnees = $resultat->fetch())
			{
?>
				<div class = "annonce">
						<img src = "images/5.nokiaLumia735.jpg" alt = "Nokia Lumia 735"/>
						<p class="description">
							<strong><?php echo 'Marque : ';?></strong><?php echo $donnees['marque'].'<br/>';?>
							<strong><?php echo 'Modèle : ';?></strong><?php echo $donnees['modele'].'<br/>';?>
							<strong><?php echo 'Prix : ';?></strong><?php echo $donnees['prix'].' €<br/>';?>
							<strong><?php echo 'Etat : ';?></strong><?php echo $donnees['etat'].'<br/>';?>
							<strong><?php echo 'Commentaire : ';?></strong><?php echo $donnees['commentaire'].'<br/>';?>
						</p>
				</div>
<?php			}
			$resultat->closeCursor();

?>

		
	</section>
	
	<?php include ('footer.php');?>
	</body>

</html>