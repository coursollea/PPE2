<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>conexion</title>
		<link rel="stylesheet" type="text/css" href="login.css" media="all"/>
	</head>
	
	<body>
	<?php 
	
		/*include("fonction.php");*/
		
	?>
		<div class="log">
			<h1>connexion</h1>
			<form method="post" action="login.php">
			<input type="text" class="pass" name="identifiant" placeholder="Identifiant">
			<br>
			<br>
			<input type="password" class="pass" id="pass" name="password"  placeholder="password">
			<br>
			<br>
			<input type="submit" class="button" value="Connexion" name="bb">
			
		
			</form>
		<?php
		if(isset($_POST['password']))
		{
			login();
		}
		
		?>
		</div>

	</body>
	