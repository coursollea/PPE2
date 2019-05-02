// AJOUT UN EVENEMENT SUR LE SELECT DES CATeGORIE ( change)
//recupéré la valeur du select des catégorie (val()) sa correspond a l'id cat
//requette ajax avec l'id de la cat ( permeptre de faire du php avec requette sql (sous cat ) puis echo)
//chage les option de mon selecteur de sous catégirie (dans le succese)


$(".categorie").on ('change', function(){
	$.ajax({
	type: 'POST',
	url: 'créationjs.php',
	data: 'text=' + $(this).val(),
	dataType: json,
	success: function(code_html)
	{
		$(this).val(code_html)
		
		
		
		
	}
	});
	
	
});

