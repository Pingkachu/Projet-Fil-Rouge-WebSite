<!DOCTYPE html>

<html>
	
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
		<title>DeMaPi</title>
		<link rel = "stylesheet" href = "demapi_accueil_style.css"/>
		<link rel = "icon" type = "image/png" href = "images/logo_demapi.png"/>
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
			
			<section>
				<div id = "col_annonces">
					<div id = "new_annonces1">
						<img src = "images/5.nokiaLumia735.jpg" alt = "Nokia Lumia 735"/>
						<div id="description"><Strong>Marque   :</strong> Nokia<br/>
											<strong>Modèle    :</strong> Lumia 735<br/>
											<strong>Prix      :</strong> 278 €<br/>
											<strong>Etat      :</strong> Neuf<br/>
											Moins cher et parfait pour les selfies
						</div>
						<p>
							<a href = "details_annonce.php">Voir Détails<a/>
						</p>
					</div>
					
					<div id = "new_annonces2">
						<img src = "images/Lumia950.jpg" alt = "Microsoft Lumia 950"/>
						<div id="description2"><Strong>Marque   :</strong> Microsoft<br/>
											<strong>Modèle    :</strong> Lumia 950<br/>
											<strong>Prix      :</strong> 600 €<br/>
											<strong>Etat      :</strong> Neuf<br/>
							<p>L'ensemble du système est très fluide et agréable à utiliser, et l'écosystème
							Windows m'a agréablement surpris par sa réactivité et par les fonctionnalités
							avancées proposées.</p>
						</div>
						<p>
							<a href = "details_annonce1.php">Voir Détails<a/>
						</p>
					</div>
					
					
				</div>
				
				
					<div id = "publicites">
						<h4>Publicités</h4>
						<a href = "http://shopping.delovia.fr/smartphones-pas-cher.html">
						<img src = "images/bloggif_56698fc1c8203.gif"/></a>
						<a href = "http://shopping.delovia.fr/smartphones-pas-cher.html">
						<img src = "images/bloggif_5669927457fba.gif"/></a>
					</div>
					
					<div id = "coldroite">
						<div id = "identification">
							<h4>Poster une annonce</h4>
							<p>Veuillez vous identifier</p>
							<form method = "post" action = "demapi_connexion_membre.php">
								<p>
									<label for = "nom_utilisateur">Pseudo : </label>
									<input type = "text" name = "nom_utilisateur" id = "nom_utilisateur" size = "24" required = "required"/>
									<br/><br/>
									<label for = "password">Mot de passe : </label>
									<input type = "password" name = "password" id = "password" size = "18" required= "required"/>
									<br/><br/>
									<input type = "checkbox" name = "reste_connecte" id = "reste_connecte"/>
									<label for = "reste_connecte">Garder ma session ouverte</label>
									<br><br>
									<input type = "submit" value = "Connexion"/>
									<br/>
								</p>
							</form>	
								<p>
									<a href = "mot_de_passe_oublie.php">Mot de passe oublié ?</a>
								</p><br/>
								<p>
								<span id = "inscription_button"><a href = "demapi_inscription.php">S'inscrire</a></span>
								</p>
							
							
						</div>
						
						<div id = "parametres">
							<h4>Paramètres</h4>
							<li><a href = "mon_profil.php">Mon Profil</a></li>
							<li><a href = "mes_annonces.php">Mes Annonces</a></li>
						</div>
					</div>
					
			
			</section>
			
			<footer>
			<div id = "demapi_pied">
				<div id = "menus_pied">
					<img src = "images/logo_demapi.png"/>
					<ul>
						<li><a href="demapi_annonces.php">Nos Annonces</a></li>
						<li><a href="demapi_activites.php">Nos Activités</a></li>
						<li><a href="demapi_contact.php">Contact</a></li>
					</ul>
				</div>
				
				<div id = "reseau_social">
					<h4>Suivez nous sur les réseaux sociaux</h4>
					<p>
						<img src="images/facebook.png" alt="Facebook" title="Facebook"/>
						<img src="images/twitter.png"  alt="Twitter"  title="Nous suivre sur Twitter!"/>
					</p>
					
				</div>
				
				<div id = "copyright">
					<p><strong><em>2016 Copyright, tous droits réservés !</em><strong></p>
				</div>
			</div>
		</footer>

		
		</div>
		
		
	</body>
	
		


</html>