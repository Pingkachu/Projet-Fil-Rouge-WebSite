<?php
	session_start();
	
	$session['pseudo'] = $_POST['pseudo'];
	$session['password'] = $_POST['password'];

?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset = "utf-8" />
		<title>DeMaPi</title>
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
					die ('Erreur de connection :'.$e->getMessage());
				}
				
				
			?>
							
		</section>
	
	</body>


</html>