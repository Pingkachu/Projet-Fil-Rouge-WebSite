<?php
	try
	{
		$bdd = new PDO('mysql:localhost; dbname = demapi; charset = utf8', 'root', '',
		array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exception $e)
	{
		die ('Erreur : '.$e->getMessage());
	}
	
	$reponse = $bdd->query('SELECT * FROM demapi.membres ORDER BY date_inscription DESC LIMIT 5, 5');
	
	while($donnees = $reponse->fetch())
	{
?>
		<p class = "membre"><strong>Membre <?php echo $donnees['id_membre'];?>:</strong><br>
		Ce membre s'appelle <strong><?php echo $donnees['nom_utilisateur'];?></strong>
		et il a été inscrit le <strong><?php echo $donnees['date_inscription'];?></strong>
		</p>
<?php
		}
		
$reponse->closeCursor();
?>