<!DOCTYPE html>

<html>
	
	<head>
		<meta charset = "utf-8"/>
		<title>DeMaPi</title>
		<link rel = "stylesheet" href = "demapi_accueil_style.css"/>
	</head>
	
	<body>
		<div id = "bloc_accueil">
			<header>
				<div id = "entete_accueil">
					<div id = "logo_connexion1">
						<p><a href = "demapi_connexion.php">Connexion</a></p>
						<img src = "images/logo_connexion1.png"/>
					</div>
					<div id = "titre_p">
						<img src = "images/logo_demapi.png"/>
						<h3>Bienvenue sur DeMaPi.com !</h3>
						<p>La maison des portables neufs et occasions  -  
						Soyez informés des dernières annonces de ventes de portables !</p>
					</div>
					
					<div id = "banniere">
						<img src = "images/banniere_p.jpg" id = "banniere_photo"/>
					</div>
					
					<nav>
					<ul>
						<li><a href="accueil.php">Accueil</a></li>
						<li><a href="demapi_annonces.php">Nos Annonces</a></li>
						<li><a href="acitivites_demapi.php">Nos Activités</a></li>
						<li><a href="forum.php">Forum</a></li>
						<li><a href="contact_demapi.php">Contact</a></li>
						<div id = "recherche">
							<form method = "post" action = "recherche.php">
							<input type = "search" name = "mot_recherche" size = "25" placeholder = "Rechercher..." required = "required"/>
							<input type = "submit" value="OK"/>
							</form>
						</div>
					</ul>
					</nav>
				
				</div>
				
			</header>
	</body>		
</html>