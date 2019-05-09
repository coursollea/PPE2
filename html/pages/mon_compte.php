<?php
	if($(this).is(':checked'))
	{ 
?>
	<form id="modif_mon_compte" enctype="multipart/form-data" action="accueil.php">
		<input type="text" name="pseudo" placeholder="Nom du pseudo"></br>
		<input type="file"  id="bloc_image" name="image"/> <img src="" id="avatar_preview"/></br>
		<input type="password" name="mdp"/></br>
		<input type="password" name="remdp"/></br>
		<input type="submit" value="Sauvegarder" class="moncompte-submit">
		
	</form>
<?php
	}
	
?>