<?php 
include('dbFunctions.php');

function getCategorie()
	{
		$bdd = createPDO();
		$reponse = $bdd->query('SELECT DISTINCT * FROM categorie ');
		$tab = Array();
		
		while($data = $reponse->fetch())
		{
			$tab[]=$data;
		}
		return $tab;
	}

?>