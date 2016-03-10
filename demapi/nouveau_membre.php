<!DOCTYPE html>

<html>
	<head>
		<meta charset = "utf-8" />
		<title>DeMaPi</title>
		<link rel = "stylesheet" href = ""/>
	</head>
	
	<body>
		<?php include ('demapi_menus.php')?>
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
				
				$req = $bdd->prepare('INSERT INTO demapi.membres (nom_membre, prenom_membre, pseudo_membre,
				adresse_mail, mot_de_passe, telephone) VALUES (:nom_membre, :prenom_membre, :pseudo_membre,
				:adresse_mail, :mot_de_passe, :telephone)');
				
				$req->execute(array('nom_membre'=>$_POST['nom_membre'],
									'prenom_membre' =>$_POST['prenom_membre'],
									'pseudo_membre'=>$_POST['pseudo_membre'],
									'adresse_mail'=>$_POST['adresse_mail'],
									'mot_de_passe'=>$_POST['mot_de_passe'],
									'telephone'=>$_POST['telephone']));
									
				
				
				
					echo 'Vous avez bien été inscrit !';
				
			
			?>
		</section>
		<?php include('footer.php');?>
	</body>
</html>