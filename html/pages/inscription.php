<!DOCTYPE html>
<html>
	<head>
		<meta charset = 'utf-8'>
		<link rel = 'stylesheet' href = '../css/style.css'>
		<title> Inscription </title>
	</head>
	
	<body>
		<div class = 'header'>
			
			<ul class = 'navright'>
				<li><a href = 'accueil.php'>Accueil</a></li>
			</ul>
			
			<div>
			</div>
		</div>
		
		<nav class = 'subNav'>
			<ul class = 'menu'>
				<li><a> Général </a></li>
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
						<li><a href='pageWeb.php?categorie=Porno'> Porno </a></li>
					</ul>
				</li>
				<li><a> Développement ▼</a>
					<ul class = 'sousmenu'>
						<li><a href='pageWeb.php?categorie=PC'> C++ </a></li>
						<li><a href='pageWeb.php?categorie=PC'> Java </a></li>
						<li><a href='pageWeb.php?categorie=PC'> SQL </a></li>
						<li><a href='pageWeb.php?categorie=PC'> PHP </a></li>
						<li><a href='pageWeb.php?categorie=PC'> HTML/CSS </a></li>
						<li><a href='pageWeb.php?categorie=PC'> JavaScript </a></li>
						<li><a href='pageWeb.php?categorie=PC'> Python </a></li>
					</ul>
				</li>
					
			</ul>
		</nav>
		
		<form class = "inscriptionForm" id = "inscriptionForm">
			<br/>
			<h1> Formulaire d'inscription </h1>
			
			<p class = "messageSpan"></p>
			
			<input type = "hidden" name = "inscription">
			
			<div>
			<div class = 'inputTextDiv'>
				<input type = "text" name = "name" placeholder = "Nom" required class = 'inscription-inputtext' autocomplete="off"><label for = "name" class ='formlabel'></label><br/>
				<input type = "text" name = "firstname" placeholder = "Prénom" required class = 'inscription-inputtext' autocomplete="off"><label for = "firstname" class ='formlabel'></label><br/>
				<input type = "text" name = "mail" placeholder = "Adresse mail" required class = 'inscription-inputtext' autocomplete="off"><label for = "mail" class ='formlabel'></label><br/><br/>
			
				<input type = "text" name = "username" placeholder = "Pseudo" required class = 'inscription-inputtext' autocomplete="off" id = 'usernameText'><label for = "username" class ='formlabel'></label><br/>
				<input type = "password" name = "password" placeholder = "Mot de passe" required class = 'inscription-inputtext' autocomplete="off" id = 'passwordText'><label for = "password" class ='formlabel'></label><br/>
				<input type = "password" name = "confirmpassword" placeholder = "Confirmation du mot de passe" required class = 'inscription-inputtext' autocomplete="off"><label for = "confirmpassword" class ='formlabel'></label><br/>
			</div>
			
			<div>
				LOL
			</div>
			</div>
			
			<br/><br/>
			<div class = "charteDiv">
				<p> En vous inscrivant sur ce forum, vous vous engagez à respecter les règles mises en place
					nécessaires à sa pérénité et au maintient de l'ordre au sein de sa communauté :
					<ul>
						<li> Pas de propos portant atteinte à l'honneur ou la dignité d'un individu ou d'une communauté</li>
						<li> Pas de propos ou de lien encourageant des activités illicites telles que l'acquisition
							d'une propriété physique ou intellectuelle ou une de ses copies </li>
						<li> Pas de propos ou de topics sujets à des débats sensibles </li>
						<li> Pas de Spams </li>
					</ul>
					
					Tout manquement au règlement du forum entraînera une sanction dont la durée aura été délibérée
					par les administrateurs compétents. </br></br>
					
					Nous nous engageons par ailleurs à ne pas divulguer vos informations personnelles.</p>
			</div>

			<input type = "checkbox" id = "accept_charte_checkbox" name = "check">
			<label for = "check"> En cochant cette case, vous reconnaissez avoir pris connaissances de la charte et accepter
			ses termes </label>
			<br/>
			<input type = "submit" id = "inscription_submit" value = "Envoyer">
			
			<p class = 'endForm'></p>
		</form>
		
	</body>
	
</html>

<script src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'> </script>
<script src = '../scripts/inscription/inscriptionButton.js'></script>

