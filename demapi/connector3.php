<?php
	try
	{
		$bdd = new PDO ('mysql:localhost; dbname=tests; charset=utf8', 'root', '',
		array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
	
	$bdd->exec('INSERT INTO tests.jeux_video(nom, possesseur, console, prix, nbre_joueurs_max,
	commentaires) VALUES(\'Battlefield 1942\', \'Patrick\', \'PC\', 45, 50, \'2nde guerre mondiale\')');
	
	echo 'Le jeu a bien été ajouté !';
	
	$reponse = $bdd->query('SELECT nom FROM tests.jeux_video WHERE possesseur = \'Patrick\'');
?>

Le possesseur Patrick possede les jeux suivants :<br>

<?php
	while($donnees = $reponse->fetch())
	{
		echo $donnees['nom'];?><br>
<?php
	}
	$reponse->closeCursor();
?>