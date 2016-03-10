<!--<?php
	session_start();
	
	$_session['nom_utilisateur'] = 'roman';
	$_session['adresse_mail'] = 'mouyideen@yahoo.fr';
?>
-->
<?php
	try
	{
		$bdd = new PDO('mysql:localhost; dbname = tests; charset = utf8', 'root', '',
		array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
	
	$req = $bdd->prepare('SELECT nom FROM tests.jeux_video WHERE possesseur = ?');
	$req->execute(array($_POST['possesseur']));
?>
Le possesseur <?php echo $_POST['possesseur'];?>
 possede les jeux suivants :
<?php
	while($donnees = $req->fetch())
	{
?>
		<p class = "answer">
			
		<?php echo $donnees['nom'];?>
		</p>
<?php		
	}
	
	$req->closeCursor();
?>