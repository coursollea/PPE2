$('#connectionLink').on('click', function(){
	
	$('body').append(
	'<div class = "filterDiv">'+
		'<form class = "connectionDiv" methode = "GET" action = "../redirect/portail.php">'+
			'<h1> Se connecter </h1>'+
			'<input type = "hidden" name = "connexion" >'+
			'<input type = "text" name = "username" class = "form-inputtext" placeholder = "Nom de compte" required><br/>'+
			'<input type = "password" name = "password" class = "form-inputtext" placeholder = "Mot de passe" required><br/>'+
			'<a href = "inscription.php"> Pas de Compte ? Créez-en un</a> <br/><br/> <a> Mot de passe oublié ? </a>'+
			'<input type = "submit" value = "Connexion">'+
			'<input type = "button" value = "Annuler" id = "cancelButton">'+
		'</form>'+
		
	'</div>'
	
	);
	
	$('#cancelButton').on('click', function()
	{
		$('.filterDiv').remove();
	});
	
});

