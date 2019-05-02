<?php
include('dbFunctions.php');

function LocalisePage($nomPage)
	{
		$bdd = createPDO();

		$query = 'SELECT * FROM categorie Where nomCategorie = ?';
		$statement = $bdd->prepare($query);
		$statement->execute(array($nomPage));	
		
		$theme = $statement->fetch(PDO::FETCH_ASSOC);
		return $theme['theme']. ' > '.$theme['nomCategorie'];

	}	

?>