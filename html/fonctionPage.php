<?php
include('dbFunctions.php');
function LocalisePage($nomPage)
	{
		$bdd = createPDO();
		$query = 'SELECT label FROM categorie Where nomCategorie  = '.$bdd->quote($nomPage).';';
		$reponse = $bdd->query($query);
		return  $reponse->fetch(PDO::FETCH_ASSOC){"label"};
	}

?>