<<<<<<< HEAD
<?php include("mainMenuBar.php"); ?>
=======
<!DOCTYPE html>

<?php 
		include('mainMenuBar.php');
		if(isset($_GET['deco']))
			disconnect();?>

<html>
	<head>
		<meta charset = 'utf-8'>
		<title> Accueil </title>
		<link rel='stylesheet' href='../css/style.css'>
	</head>
	
	<body>
>>>>>>> 72ff54ebe28359c2e1c0f33ebdd78e431fe02a97
	<div id= "charteContainer">
		<div class="charteDiv2">
			<form method="GET" action="accueil.php">
				<p class="regle_charteDiv">
					Les règles a respecter sont : 
					<ul class= "differRegle">
						<li> <span class= "mot_en_rouge">Petit 1</span>: Pas de propos portant atteinte à l'honneur ou la dignité d'un individu ou d'une communauté</li>
						<li> <span class= "mot_en_rouge">Petit 2</span>: Pas de propos ou de lien encourageant des activités illicites telles que l'acquisition
							d'une propriété physique ou intellectuelle ou une de ses copies </li>
						<li> <span class= "mot_en_rouge">Petit 3</span>: Pas de propos ou de topics sujets à des débats sensibles </li>
						<li> <span class= "mot_en_rouge">Petit 4</span>: Pas de Spams </li>
						<li> <span class= "mot_en_rouge">Petit 5</span>: Les sujets sensibles ou choquant reste dans <span class= "bold_and_underline">LEUR</span> catégorie (blague de cul, propos obscène (toujours en respectant le <span class= "mot_en_rouge">Petit 1</span>) reste dans la catégorie Porno 
							et toujours dans la limite du <span class= "mot_en_rouge">Petit 3 </span>!</li> 
						<li> <span class= "mot_en_rouge">Petit 6</span>: Les communautés qui visent à faire du mal à autres personnes ou celles qui embrigadent les personnes qui sont dans la communauté sont formellement interdits!!! </li>
					</ul>
				</p>
			</form>
		</div>
	</div>
	</body>
</html>