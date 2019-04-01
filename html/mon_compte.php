<?php
	if($(this).is(':checked'))
	{
		windown = open; 
?>
	<form id="modif_mon_compte" action="accueil.php">
		<input type="text" name="name" placeholder="Nom du pseudo"></br>
		<input type="file" name="name"/></br>
		<input type="password" name="name"/></br>
		<input type="password" name="rename"/></br>
		<input type="submit" value="Save" class="moncompte-submit">
		
	</form>
<?php
	}
	
?>