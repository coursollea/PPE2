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
		<div class = 'header'>
			<ul class = 'navright'>
				<?php if(!isConnected()) 
				{?>
					<li><a id = 'connectionLink'>Connexion</a></li> 
					<li><a href = 'inscription.php'>Inscription </a></li> <?php
				}
				else 
				{?>
					<li><a><?php echo $_SESSION['username'];?> ▼</a>
						<ul>
							<li><a href = 'accueil.php?deco=1' id = 'deconnexionLink'>Déconnexion</a></li>
							<li><a id="compteLink">Mon compte</a></li>
						</ul>
					</li> 
					<li><a> Messagerie <?php echo displayMessageNumber()?></a></li>
					<li><a> Notifications </a></li><?php
				}?>
				
				
			</ul>
			
			<ul class = 'navleft'>
				<li><a href = 'accueil.php'>Accueil</a></li>
				<li><a>Se présenter</a></li>
				<li><a>Requête</a></li>
				<li><a>Charte</a></li>
			</ul>
			
			<div>
			</div>
		</div>
		
		<nav class = 'subNav'>
			<ul class = 'menu'>
				<li><a href = 'pageWeb.php?categorie=Général'> Général </a></li>
				<li><a> Jeu vidéo ▼</a>
					<ul class = 'sousmenu'>
						<li ><a href='pageWeb.php?categorie=PC'> PC </a></li>
						<li><a href='pageWeb.php?categorie=PS4'> PS4 </a></li>
						<li><a href='pageWeb.php?categorie=ONE'> ONE </a></li>
						<li><a href='pageWeb.php?categorie=Switch'> Switch </a></li>
						<li><a href='pageWeb.php?categorie=Rétro'> Rétro </a></li>
					</ul>
				</li>
				<li><a> Musique ▼</a>
					<ul class = 'sousmenu'>
						<li><a href='pageWeb.php?categorie=Hip-Hop'> Hip-Hop </a></li>
						<li><a href='pageWeb.php?categorie=Rock'> Rock </a></li>
						<li><a href='pageWeb.php?categorie=Electro'> Electro </a></li>
						<li><a href='pageWeb.php?categorie=Variété'> Variété </a></li>
						<li><a href='pageWeb.php?categorie=Autre'> Autre </a></li>
					</ul>
				</li>
				<li><a> Films ▼</a>
					<ul class = 'sousmenu'>
						<li><a href='pageWeb.php?categorie=Action'> Action </a></li>
						<li><a href='pageWeb.php?categorie=Comédie'> Comédie </a></li>
						<li><a href='pageWeb.php?categorie=Dramatique'> Dramatique </a></li>
						<li><a href='pageWeb.php?categorie=Animé'> Animé </a></li>
						<li><a href='https://www.dorcelstore.com/fr'> Porno </a></li>
					</ul>
				</li>
				<li><a> Développement ▼</a>
					<ul class = 'sousmenu'>
						<li><a href='pageWeb.php?categorie=C++'> C++ </a></li>
						<li><a href='pageWeb.php?categorie=Java'> Java </a></li>
						<li><a href='pageWeb.php?categorie=SQL'> SQL </a></li>
						<li><a href='pageWeb.php?categorie=PHP'> PHP </a></li>
						<li><a href='pageWeb.php?categorie=HTML/CSS'> HTML/CSS </a></li>
						<li><a href='pageWeb.php?categorie=JavaScript'> JavaScript </a></li>
						<li><a href='pageWeb.php?categorie=Python'> Python </a></li>
					</ul>
				</li>
					
			</ul>
		</nav>
			<article>
				<h1> Accueil </h1>
					
					<?php 
						
						if(isset($_GET['modification_compte']))
						{
							modifyAccount($_GET['username2'], $_GET['password'], $_GET['imgLink']);
							echo redirectMessage($_GET['msg']);
						}
						else if(isset($_GET['msg']))
							echo redirectMessage($_GET['msg']);
					
						?>
				
			</article>
	</body>
</html>

<script src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'> </script>
<script src = '../scripts/accueil/accueilButtons.js'></script>
<script src = '../scripts/accueil/mon_compteButton.js'></script>