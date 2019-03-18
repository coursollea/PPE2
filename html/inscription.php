<!DOCTYPE html>
<html>
	<head>
		<meta charset = 'utf-8'>
		<link rel = 'stylesheet' href = 'style.css'>
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
		
		
		<form class = "inscriptionForm" >
			<br/>
			<h1> Formulaire d'inscription </h1>

			
			<input type = "hidden" name = "inscription">
			
			<div class = 'inputTextDiv'>
				<input type = "text" name = "name" placeholder = "Nom" required class = 'inscription-inputtext' autocomplete="off"><br/>
				<input type = "text" name = "firstname" placeholder = "Prénom" required class = 'inscription-inputtext' autocomplete="off"><br/>
				<input type = "text" name = "email" placeholder = "Adresse mail" required class = 'inscription-inputtext' autocomplete="off"><br/><br/>
			
				<input type = "text" name = "username" placeholder = "Pseudo" required class = 'inscription-inputtext' autocomplete="off" id = 'usernameText'><br/>
				<input type = "password" name = "password" placeholder = "Mot de passe" required class = 'inscription-inputtext' autocomplete="off" id = 'passwordText'><br/>
				<input type = "password" name = "confirmpassword" placeholder = "Confirmation du mot de passe" required class = 'inscription-inputtext' autocomplete="off"><br/>
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
		</form>
		
	</body>
	
</html>

<script src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'> </script>
<script src = 'inscriptionButton.js'></script>

