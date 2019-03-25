$('#inscription_submit').on('click', function(event)
{
	event.preventDefault();
	
	$('.messageSpan').html("");
	$('.endForm').html("");
	
	$.ajax({
		
		url : '/ppe2/html/scripts/inscription/inscriptionButtonEvent.php',
		dataType : 'json',
		type : 'GET',
		data : 
		{
			'checked' : document.getElementById('accept_charte_checkbox').checked,
			'inscription' : 1,
			'name' : document.getElementsByName('name')[0].value,
			'firstname' : document.getElementsByName('firstname')[0].value,
			'mail' : document.getElementsByName('mail')[0].value,
			'username' : document.getElementsByName('username')[0].value,
			'password' : document.getElementsByName('password')[0].value,
			'confirmpassword' : document.getElementsByName('confirmpassword')[0].value
			
		},
		success : function(retour)
		{
			if(retour['all_is_filled'])
			{
				console.log(retour['inscrit']);
	
				if(document.getElementById('accept_charte_checkbox').checked == false)
				{
					$('.endForm').html('<span class = "errorMessage"> Veuillez accepter les termes de la charte </span>');
				}
				else if(!retour['usable_username'])
				{
					console.log(retour['usable_username']);
					$('.inscription-inputtext[name="username"]').css('border-color', 'red');
					$('.messageSpan').html('<span class = "errorMessage"> Le pseudo est déjà utilisé </span>');
					window.location.href = "#inscriptionForm";
				}
				else if(!retour['usable_mail'])
				{
					$('.inscription-inputtext[name="mail"]').css('border-color', 'red');
					$('.messageSpan').html('<span class = "errorMessage"> L\'adresse mail est déjà enregistrée pour un autre compte </span>');
					window.location.href = "#inscriptionForm";
				}
				else if(!retour['password_match'])
				{
					console.log('111');
					$('.inscription-inputtext[name="password"]').css('border-color', 'red');
					$('.inscription-inputtext[name="confirmpassword"]').css('border-color', 'red');
					$('.messageSpan').html('<span class = "errorMessage"> Les mots de passe ne correspondent pas </span>');
					window.location.href = "#inscriptionForm";
				}
				else if(retour['inscrit'])
				{
					window.location.href = "accueil.php?msg=3";
				}
			}
			else
			{
				for(var i = 0; i < retour['empty_input_ids'].length; i++)
				{
					$('.inscription-inputtext[name='+retour['empty_input_ids'][i]+']').css('border-color', 'red');
				}
				$('.messageSpan').html('<span class = "errorMessage"> Veuillez remplir tous les champs </span>');
				
				window.location.href = "#inscriptionForm";
			}
		},
		error : function()
		{
			console.log('erreur');
		}
		
	});
	
});

$('.inscription-inputtext').on('click', function()
{
	$(this).css('border-color', 'black');
});