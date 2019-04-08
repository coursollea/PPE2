$.ajax({
	type: 'POST',
	url: 'création.php',
	data: 'nomParametre=' + variableJs,
	success: function(code_html)
	{
		creatOeuvre(JSON.parse(code_html));
		
		function creatOeuvre(tab)
		{
			$( "#blockC34" ).empty();
			for (var i=0 ; i< tab.length ;i++)
			{
				
				var box ='<div>'
						+'<img class="logo" src="toile/'+tab[i]["img"]+'" alt="japon"/>'
						+'<h3>'+tab[i]["nom"]+'</h3>'
						+'<p>'+tab[i]["prix"]+'</p>'
						+'<button type="submit">Acheter</button>'
						+'</div>';
				$('#blockC34').append(box);
			}
		}
		
		
	}
});