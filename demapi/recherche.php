<!DOCTYPE html>

<html>
	<head>
		<meta charset = "utf-8"/>
		<title>DeMaPi</title>
		<link rel = "stylesheet" href = "recherche.css"/>
	</head>

	<body>
		<?php include ('demapi_menus.php'); ?>
		
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
				$azer = $_POST['mot_recherche'] ;
				$req = $bdd->prepare("SELECT * FROM demapi.annonces WHERE lcase(marque) LIKE lcase('$azer%') OR
				lcase(modele) LIKE lcase('$azer%') ORDER BY date_annonce;");
				
				$req->execute();
								
?>
	
			<h2>Résultats de recherche pour "<?php echo $_POST['mot_recherche'];?>"</h2>
<?php								
				while($donnees = $req->fetch())
				{
?>

				<div class = "annonce">
						<p class="description">
							<strong><?php echo 'Marque : ';?></strong><?php echo $donnees['marque'].'<br/>';?>
							<strong><?php echo 'Modèle : ';?></strong><?php echo $donnees['modele'].'<br/>';?>
							<strong><?php echo 'Prix : ';?></strong><?php echo $donnees['prix'].' €<br/>';?>
							<strong><?php echo 'Etat : ';?></strong><?php echo $donnees['etat'].'<br/>';?>
							<strong><?php echo 'Commentaire : ';?></strong><?php echo $donnees['commentaire'].'<br/>';?>
						</p>
				</div>
<?php			
				}
				$req->closeCursor();
?>
		</section>
		<?php include ('footer.php');?>
	
	</body>
</html>