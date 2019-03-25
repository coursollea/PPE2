<?php	
	
	include('dbFunctions.php');
	
	if(isset($_GET['inscription']))
	{
		$retour = Array();
		
		$empties = Array();
		
		if(empty($_GET['name']))
		{
			$empties[] = 'name';
		}
		if(empty($_GET['firstname']))
		{
			$empties[] = 'firstname';
		}
		if(empty($_GET['mail']))
		{
			$empties[] = 'mail';
		}
		if(empty($_GET['username']))
		{
			$empties[] = 'username';
		}
		if(empty($_GET['password']))
		{
			$empties[] = 'password';
		}
		if(empty($_GET['confirmpassword']))
		{
			$empties[] = 'confirmpassword';
		}
		
		$retour['all_is_filled'] = count($empties) == 0;
		$retour['empty_input_ids'] = $empties;
		
		if(count($empties) == 0)
		{
			$retour['password_match'] = $_GET['password'] == $_GET['confirmpassword'];
			$retour['usable_username'] = !userExists($_GET['username']);
			$retour['usable_mail'] = !isAddressAlreadyUsed($_GET['mail']);
			
			if($retour['password_match'] AND $retour['usable_username'] AND $retour['usable_mail'])
			{
				$bdd = createPDO();
				$query = 'INSERT INTO Compte(name, firstname, username, password, mail)
							values(?, ?, ?, ?, ?);';
				
				$bdd->prepare($query);
				$bdd->execute([$_GET['name'], $_GET['firstname'], $_GET['username'], $_GET['password'], $_GET['mail']]);
			}
			
			$retour['inscrit'] = 1;
		}
		else
		{
			$retour['inscrit'] = 0;
		}
		
		echo json_encode($retour);
		
	}
	
?>