<!DOCTYPE html>

<?php include('dbFunctions.php');
		session_start();
		if(isset($_GET['deco']))
			disconnect();
?>

<html>
	<head>
		<meta charset = 'utf-8'>
		<title> Accueil </title>
		<link rel='stylesheet' href='style.css'>
	</head>
	
	<?php //connect('Bash'); ?>
	
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
							<li><a>Mon compte</a></li>
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
				<li><a> Général </a></li>
				<li><a> Jeu vidéo ▼</a>
					<ul class = 'sousmenu'>
						<li><a> PC </a></li>
						<li><a> PS4 </a></li>
						<li><a> ONE </a></li>
						<li><a> Switch </a></li>
						<li><a> Rétro </a></li>
					</ul>
				</li>
				<li><a> Musique ▼</a>
					<ul class = 'sousmenu'>
						<li><a> Hip-Hop </a></li>
						<li><a> Rock </a></li>
						<li><a> Electro </a></li>
						<li><a> Variété </a></li>
						<li><a> Autre </a></li>
					</ul>
				</li>
				<li><a> Films ▼</a>
					<ul class = 'sousmenu'>
						<li><a> Action </a></li>
						<li><a> Comédie </a></li>
						<li><a> Dramatique </a></li>
						<li><a> Animé </a></li>
						<li><a> Porno </a></li>
					</ul>
				</li>
				<li><a> Développement ▼</a>
					<ul class = 'sousmenu'>
						<li><a> C++ </a></li>
						<li><a> Java </a></li>
						<li><a> SQL </a></li>
						<li><a> PHP </a></li>
						<li><a> HTML/CSS </a></li>
						<li><a> JavaScript </a></li>
						<li><a> Python </a></li>
					</ul>
				</li>
					
			</ul>
		</nav>
			<article>
				<h1> Accueil </h1>
					
					<?php 
						
						if(isset($_GET['msg']))
							echo redirectMessage($_GET['msg']);
					
					?>
				
			</article>
	</body>
</html>

<script src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'> </script>
<script src = 'accueilButtons.js'></script>