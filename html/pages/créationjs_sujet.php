<?php 
include('dbFunctions.php');

	//$_POST['text'];
	$bdd = createPDO();
	$reponse = $bdd->query('SELECT DISTINCT * FROM sujet INNER JOIN categorie WHERE sujet.idCategorie in(select idCategorie from categorie where nomCategorie='.$_POST['text'].')');
	$tab = Array();
	
	while($data = $reponse->fetch())
	{
		$tab[]=$data;
	}
	
	echo json_encode($tab);

?>