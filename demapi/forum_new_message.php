<!DOCTYPE html>

<html>
	<head>
		<meta charset = "utf-8"/>
		<title>DeMaPi</title>
		<link rel = "stylesheet" href = "forum.css"/>
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
				catch (Exception $e)
				{
					die ('Erreur : '.$e->getMessage());
				}
			
				$req = $bdd->prepare('INSERT INTO demapi.discussions (pseudo, message) VALUES(:pseudo, :message)');
				$req->execute(array('pseudo'=>$_POST['pseudo'],
				'message'=>$_POST['message']
				));
					$resultat = $bdd->query('SELECT pseudo, message FROM demapi.discussions');
			
				while($donnees = $resultat->fetch())
				{
		?>		
				<p class = "message">
					<strong><?php echo htmlspecialchars($donnees['pseudo']);?> : </strong>
					<?php echo htmlspecialchars($donnees['message']);?>
				</p><br>
		
		<?php	
				}
				
				$resultat->closeCursor();
		
?>

<h2>Nouveau message</h2>
		<form method = "post" action = "forum_new_message.php">
			<fieldset>
				<legend>Message</legend>
				<label for = "pseudo">Pseudo :</label>
				<input type = "text" name = "pseudo" id = "pseudo" required = "required" />
				<br>
				<label for = "message">Message : </label><br>
				<textarea name = "message" id = "message" col = "10"rows = "10" required = "required"></textarea>
				<br><br>
				<input type = "submit" value = "Envoyer"/>
			</fieldset>
		</form>

	<?php include('footer.php');?>
</section>
	</body>
</html>		