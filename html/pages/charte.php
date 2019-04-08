<!DOCTYPE html>

<?php include('../tools/dbFunctions.php');
		session_start();
		if(isset($_GET['deco']))
			disconnect();?>

<html>
	<head>
		<meta charset = 'utf-8'>
		<title> Accueil </title>
		<link rel='stylesheet' href='../css/style.css'>
	</head>
	
	<body>
	<div id= "charteContainer">
		<div class="charteDiv2">
			<form method="GET" action="accueil.php">
				<p class="regle_charteDiv">
					Les règles a respecter sont : 
					<ul class= "differRegle">
						<li> Petit 1: Pas de propos portant atteinte à l'honneur ou la dignité d'un individu ou d'une communauté</li>
						<li> Petit 2: Pas de propos ou de lien encourageant des activités illicites telles que l'acquisition
							d'une propriété physique ou intellectuelle ou une de ses copies </li>
						<li> Petit 3: Pas de propos ou de topics sujets à des débats sensibles </li>
						<li> Petit 4: Pas de Spams </li>
						<li> Petit 5: Les sujets sensibles ou choquant reste dans LEUR catégorie (blague de cul, propos obscène (toujours en respectant le Petit 1) reste dans la catégorie Porno 
							et toujours dans la limite du Petit 3!</li> 
						<li> Petit 6: Les communautés qui visent à faire du mal à autres personnes ou celles qui embrigadent les personnes qui sont dans la communauté sont formellement interdits!!! </li>
					</ul>
				</p>
			</form>
		</div>
	</div>
	</body>
</html>