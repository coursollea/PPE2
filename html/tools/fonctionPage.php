<?php
include('dbFunctions.php');
function LocalisePage($nomPage)
	{
		$bdd = createPDO();
		
		$query = 'SELECT label FROM categorie Where nomCategorie = ?';
		$statement = $bdd->prepare($query);
		$statement->execute(array($nomPage));
		
		
		echo $query;
		
		$label = $statement->fetch(PDO::FETCH_ASSOC);
		return $label['label'];
	}

?>