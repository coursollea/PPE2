$('#inscription_submit').on('click', function(event)
{
	
	
	$.ajax({
		
		url : 'inscriptionButtonEvent.php',
		dataType : 'html',
		type : 'GET',
		data : 
		{
			'email' : document.getElementsByName('email')[0].value,
			'username' : document.getElementsByName('username')[0].value,
			'password' : document.getElementsByName('password')[0].value,
			'confirmpassword' : document.getElementsByName('confirmpassword')[0].value
			
		},
		success : function(retour)
		{
			console.log(retour);
			if(retour <= 0)
			{
				
			}
			else
			{
				activable = 1;
			}
		}
		
	});
	
	event.preventDefault();
	
	
});