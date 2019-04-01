$('#compteLink').on('click', function(){
	
	$('body').append(
	'<div class = "filterDiv">'+
		'<form class = "connectionDiv" methode = "GET" action = "">'+
			'<h1> Modif Compte </h1>'+
			'<input type = "hidden" name = "modification_compte" value = 1>'+
			'<input type = "hidden" name = "msg" value=4>'+
			'<input type="text" name="username2"  class = "form-inputtext-compte" placeholder="Nom du pseudo"><br/>'+
			'<input type = "password" name = "password" class = "form-inputtext-compte" placeholder = "Mot de passe" required><br/>'+
			'<input type = "password" name = "confirPassword" class = "form-inputtext-compte" placeholder = "Confirmer le mot de passe" required><br/>'+
			'<input type="file" name="imgLink" class = "form-inputtext-compte"/>'+
			'<input type = "submit" value = "Save" class="moncompte-submit">'+
			'<input type = "button" value = "Annuler" id = "cancelButton" class="moncompte-submit">'+
		'</form>'+
		
	'</div>'
	
	);
	
	$('#cancelButton').on('click', function()
	{
		$('.filterDiv').remove();
	});
	
});

