<?php
	
	// Créer un PDO ( A UTILISER IMPERATIVEMENT A CHAQUE FOIS QU'ON A BESOIN DE CREER UN PDO )
	function createPDO()
	{

		return new PDO('mysql:host=localhost;dbname=basesite;charset=utf8', 'root', 'root');
	}


	// TRUE si l'utilisateur est connecté, sinon FALSE
	function isConnected()
	{
		return isset($_SESSION['idCompte']) ? 1: 0;
	}
	
	// TRUE si le compte est admin, FALSE sinon (Renvoie aussi FALSE si l'utilisateur n'est pas connecté)
	function isAdmin()
	{
		if(!isConnected())
			return false;
		
		$query = 'SELECT admin FROM Compte WHERE idCompte = '.$_SESSION['idCompte'].';';
		$bdd = createPDO();
		
		$reponse = $bdd->query($query);
		$admin = $reponse->fetch(PDO::FETCH_ASSOC);
		
		return $admin['admin'];
	}
	
	// TRUE si l'utilisateur est banni, FALSE sinon
	function isBanned()
	{
		
		if(!isConnected())
			return false;
		
		$query = 'SELECT banned FROM Compte WHERE idCompte = '.$_SESSION['idCompte'].';';
		$bdd = createPDO();
		
		$reponse = $bdd->query($query);
		$banned = $reponse->fetch(PDO::FETCH_ASSOC);
		
		return $banned['banned'];
	}
	
	// -1 si le nom de compte n'existe pas, 0 si le mot de passe n'est pas le bon ou 1 si les logs sont valides
	function verifyLogs($username, $password)
	{
		$retour = -1;
		$indice = 0;
		
		$bdd = createPDO();
		
		$query = ('SELECT username, password FROM compte');
		$reponse = $bdd->query($query);
		
		$exists = $reponse->fetchAll(PDO::FETCH_ASSOC);
		
		for($i = 0; $i < count($exists); $i++)
		{
			if($exists[$i]['username'] == $username)
			{
				$indice = $i;
				$retour = 0;
				break;
			}
		}
		
		if($retour > -1)
		{
			if($exists[$indice]['password'] == $password)
				$retour = 1;
		}
		
		return $retour;
		
	}
	
	// TRUE si le compte éxiste, FALSE sinon
	function userExists($username)
	{
		$bdd = createPDO();
		$query = "SELECT EXISTS(SELECT * FROM Compte WHERE username = '".$username."') as existe;";
		
		$reponse = $bdd->query($query);
		
		$exists = $reponse->fetch(PDO::FETCH_ASSOC);
		return $exists['existe'];
	}
	
	// TRUE si l'adresse email est déjà utilisée, FALSE sinon
	function isAddressAlreadyUsed($address)
	{
		$bdd = createPDO();
		$query = "SELECT EXISTS(SELECT * FROM Compte WHERE email = '".$address."') as existe;";
		
		$reponse = $bdd->query($query);
		
		$exists = $reponse->fetch(PDO::FETCH_ASSOC);
		return $exists['existe'];
	}
	
	// Connecte l'utilisateur et définie $_SESSION['idCompte'], $_SESSION['username']
	function connect($username)
	{
		$bdd = createPDO();
		$query = 'SELECT idCompte FROM compte WHERE username = '.$bdd->quote($username).';';
		$reponse = $bdd->query($query);
		
		$idCompte = $reponse->fetch(PDO::FETCH_ASSOC);
		
		$_SESSION['username'] = $username;
		$_SESSION['idCompte'] = $idCompte['idCompte'];
	}
	
	// Déconnecte l'utilisateur et le redirige vers l'accueil
	function disconnect()
	{
		if(isConnected())
		{
			session_destroy();
			header('Location: accueil.php');
		}
		
		
	}
	
	// Renvoie un STRING contenant un message pour les formulaire de redirection selon la valeur de msgCode :
	/* 0 = Compte inexistant
	 * 1 = Mot de passe erroné 
	 * 2 = Bienvenue [username] 
	 * 3 = Inscription réussie 
	 * 4 = modif pseudo */	 
	function redirectMessage($msgCode)
	{
		if($msgCode == 0)
			return '<span class = "errorMessage"> Compte inexistant </span>';
		else if($msgCode == 1)
			return '<span class = "errorMessage"> Mot de passe erroné </span>';
		else if($msgCode == 2)
		{
			$message = 'Bienvenue ';
			
			if(isset($_SESSION['username']))
				$message .= $_SESSION['username'];
			
			$message .= ' !';
				
			return '<span class = "defaultMessage">'.$message.' </span>';
		}
		else if($msgCode == 3)
		{
			return '<span class = "defaultMessage">Vous êtes désormais inscrit ! Vous allez recevoir un mail de confirmation</span>';
		}
		else if ($msgCode == 4)
		{
			return '<span class = "defaultMessage">Bienvenue '.$_SESSION['username'].' !</span>';
		}
		else return null;
	}
	
	// Renvoie un SPAN contenant le nombre de message (Si il n'y a aucun message, renvoie NULL)
	function displayMessageNumber()
	{
		$query = 'SELECT COUNT(*) as nb FROM Message WHERE idDestinataire = '.$_SESSION['idCompte'].' AND lu = 0;';
		$bdd = createPDO();
		$reponse = $bdd->query($query);
		
		$nb = $reponse->fetch(PDO::FETCH_ASSOC);
		
		if($nb['nb'] > 99)
			return '<span class = "notifNumber"> 99+ </span>';
		else if($nb['nb'] > 0)
			return '<span class = "notifNumber">'.$nb['nb'].'</span>';
		else return null;
	}
	
	// Renvoie la liste des sujets d'une catégorie sous forme de tableau 2D
	function getTopicsAbout($id)
	{
		$query = 'SELECT * FROM Sujet WHERE idCategorie = '.$id.';';
					
		$bdd = createPDO();
		
		$reponse = $bdd->query($query);
		
		return $reponse->fetchAll(PDO::FETCH_ASSOC);
	}
	
	// Renvoie les informations de l'auteur du topic passé en paramètre sous forme de tableau
	function getTopicAuthor($idSujet)
	{
		$query = 'SELECT * FROM Compte WHERE idCompte = (SELECT idAuteur FROM Sujet WHERE idSujet = '.$idSujet.');';
		$bdd = createPDO();
		
		$reponse = $bdd->query($query);

		return $reponse->fetch(PDO::FETCH_ASSOC);	
	}
	
	// Renvoie les informations du sujet correspondant a l'id passé en paramètre sous forme de tableau	
	function createTopicLinkFor($idSujet)
	{
		/*$query = 'SELECT * FROM Sujet WHERE idSujet = '.$idSujet.';';
		$bdd = createPDO();
		$reponse = $bdd->query($query);
		
		$sujet = $reponse->fetch(PDO::FETCH_ALL);
		
		$author = getTopicAuthor($idSujet);*/
		
		$html = 
		'<a class = sujetDiv>'.

				'<div class = "sjtInfoDiv">'.
					
					'<img src = "../../img/pauvre_gosse.jpg" class = "avatar">'.
					'<span class = "sujetTitle">Titre</span>'.
					
				'</div>'.
			
			
				'<div class = "sjtPseudoDiv">'.
					'<span class = "pseudoSpan">Pseudo</span>'.
				'</div>'.
			
				
				'<div class = "sjtDateDiv">'.
					'<span>Date+Heure</span>'.
				'</div>'.

		'</a>';
		
		return $html;
	}

		




	//Renvoie l'id de l'utilisateur
	
	/*function getUserId($username)
	{
		$query = 'SELECT idCompte FROM Compte WHERE username = '.$username.';';
		$bdd = createPDO();
		$reponse = $bdd->query($query);
		
		return $reponse->fetch(PDO::FETCH_ASSOC);
	}*/


	// Renvoie le pseudo d'un utilisateur a partir de son id
	function getUserNameOf($idCompte)
	{
		$query = 'SELECT username FROM Compte WHERE idCompte = '.$idCompte.';';
		$bdd = createPDO();
		
		$reponse = $bdd->query($query);

		return $reponse->fetch(PDO::FETCH_ASSOC)['username'];
	}
	
	// Modifie le compte avec les valeurs passées en paramètre
	function modifyAccount($username, $mdp, $imgLink)
	{
		
		$array = Array();
		$array[] = $username;
		$array[] = $mdp;
		$array[] = $imgLink;
		
		$bdd = createPDO();
		
		$query = 'UPDATE Compte SET username = "'.$username.'", password = "'.$mdp.'", imgFileLink = "'.$imgLink.'" WHERE idCompte = '.$_SESSION['idCompte'].';';
		$bdd->query($query);
		
		$_SESSION['username'] = getUserNameOf($_SESSION['idCompte']);
	}


	function getTheme()
	{
		$bdd = createPDO();
		$reponse = $bdd->query('SELECT DISTINCT * FROM theme ');
		$tab = Array();
		
		while($data = $reponse->fetch())
		{
			$tab[]=$data;
		}
		return $tab;

	}
	
	function getSujetOfCategory($idCategory)
	{
		$bdd = createPDO();
		$reponse = $bdd->query('SELECT * Sujet WHERE idCategorie = '.$idCategory.');');
		$return = $reponse->fetchAll(PDO::FETCH_ASSOC);
		
		return $return;
	}
	
	function createTopicLinkGroup($sujetArray)
	{
		$bdd = createPDO();
		$array = Array();
		
		foreach($sujetArray AS $line)
		{
			$array[] = createTopicLinkFor($line['idSujet']);
		}
		
		return $array;
		
	}
	
	

	 ?>
	



