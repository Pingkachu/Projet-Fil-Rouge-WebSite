<?php
$dossier = './Ressources/photos/';
$fichier = basename($_FILES['image']['name']);
$taille_maxi = 100000;
$taille = filesize($_FILES['image']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['image']['name'], '.'); 

//On verifie que le formulaire a ete envoye
	if(isset($_POST['titre']) and $_POST['titre']!='')
	{
		if($_POST['titre']!='' and $_POST['descriptionanglais']!='' and $_POST['publiee']!='')
		{
				//On enleve lechappement si get_magic_quotes_gpc est active
				if(get_magic_quotes_gpc())
				{
					$_POST['titre'] = stripslashes($_POST['titre']);
					$_POST['descriptionanglais'] = stripslashes($_POST['descriptionanglais']);
					$_POST['publiee'] = stripslashes($_POST['publiee']);
					
				}
				
					//// Vérifications image + traitement
					
						if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
						{
							 $message = 'You must upload a png, gif, jpg or jpeg file';
						}
						if($taille>$taille_maxi)
						{
							 $message = 'This file is too heavy';
						}
						if(!isset($message)) //S'il n'y a pas d'erreur, on upload
						{
							 //On formate le nom du fichier ici...
							 $fichier = strtr($fichier, 
								  'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
								  'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
							 $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
							 if(move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
							 {
								  echo 'Upload successfully done !';
							 }
							 else //Sinon (la fonction renvoie FALSE).
							 {
								  echo 'Upload failed!';
							 }
						}
					
					//// Fin vérifications
				
				
				
				
				
							//On echape les variables pour pouvoir les mettre dans une requette SQL
							$titre = mysql_real_escape_string($_POST['titre']);
							$dossier = mysql_real_escape_string($dossier);
							$nom_fichier = mysql_real_escape_string($fichier);
							$extension = mysql_real_escape_string($extension);
							$descriptionanglais = mysql_real_escape_string($_POST['descriptionanglais']);
							$publiee = mysql_real_escape_string($_POST['publiee']);
							//On verifie sil ny a pas deja un utilisateur inscrit avec le titre choisis
							$sql = mysql_query('select id from photos where titre="'.$titre.'"') or die(mysql_error());
							$dn = mysql_num_rows($sql);
							if($dn==0)
							{
								//On recupere le descriptionanglaisbre dutilisateurs pour donner un identifiant a lutilisateur actuel
								$sql2 = mysql_query('select id from photos') or die(mysql_error());
								$dn12 = mysql_num_rows($sql2);
								
								$id = $dn12+1;
								//On enregistre les informations dans la base de donnees
								if(mysql_query('insert into photos(id, titre, dossier, nom_fichier, extension, descriptionanglais, publiee, date_ajout) values ('.$id.', "'.$titre.'", "'.$dossier.'", "'.$nom_fichier.'", "'.$extension.'", "' . $descriptionanglais . '", "' . $publiee . '", "'.time().'")')  or die("Erreur SQL ! ".mysql_error()))
								{
									//Si ca a fonctionne, on naffiche pas le formulaire
									$form = false;
									
									$message='
											Picture added.<br />
											<a href="edit_pictures.php">Edit pictures</a> - <a href="pictures.php">See pictures</a>
									';
								}
								else
								{
									//Sinon on dit quil y a eu une erreur
									$form = true;
									$message = 'An error has occurred while sending';
								}
							}
							else
							{
								//Sinon, on dit que le titre voulu est deja pris
								$form = true;
								$message = 'Another picture has the same title.';
							}
		
		}
		 else
		{
			$form = true;
			$message='A field is not completed';
		}
		
		//Si formulaire envoyé et doit être re-affiché, on écrire les données renseignées
			if($from=true)
			{
							$titre = htmlentities($_POST['titre'], ENT_QUOTES, 'UTF-8');
							$lien = htmlentities($_POST['lien'], ENT_QUOTES, 'UTF-8');
							$descriptionfrancais = htmlentities($_POST['descriptionfrancais'], ENT_QUOTES, 'UTF-8');
							$descriptionanglais = htmlentities($_POST['descriptionanglais'], ENT_QUOTES, 'UTF-8');
							$publiee = htmlentities($_POST['publiee'], ENT_QUOTES, 'UTF-8');
			}
			
	}
	else
	{
		$form = true;
	}
?>