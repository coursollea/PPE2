$('#compteLink').on('click', function(){
	
	$('body').append(
	'<div class = "filterDiv">'+
		'<form class = "connectionDiv" methode = "GET" action = "">'+
			'<h1> Modif Compte </h1>'+
			'<input type = "hidden" name = "connexion" >'+
			'<input type="text" name="name"  class = "form-inputtext" placeholder="Nom du pseudo"><br/>'+
			'<input type = "password" name = "password" class = "form-inputtext" placeholder = "Mot de passe" required><br/>'+
			'<input type = "password" name = "confirPassword" class = "form-inputtext" placeholder = "Confirmer le mot de passe" required><br/>'+
			'<input type="file" name="name"/>'+
			'<input type = "submit" value = "Save">'+
			'<input type = "button" value = "Annuler" id = "cancelButton">'+
		'</form>'+
		
	'</div>'
	
	);
	
	$('#cancelButton').on('click', function()
	{
		$('.filterDiv').remove();
	});
	
});

