<!DOCTYPE html>

<?php include('../tools/dbFunctions.php');
		session_start();
		if(isset($_GET['deco']))
			disconnect();?>

<html>
	<head>
		<meta charset = 'utf-8'>
		<title> Accueil </title>
		<link rel='stylesheet' href='../css/style.css'>
	</head>
	
	<body>
	<div id= "presenterContainer">
		<div class="presenterDiv">
			<form method="GET" action="accueil.php">
				<p class="presenterPseudo">
					<?php  echo $_SESSION['username']; ?>
					<div class= "description_presenter">
						<textarea style="resize:none" name="description"  rows="10" cols="100" placeholder="Votre description pour vous présenter!"> </textarea>
						<button class="button_valid_presenter"> N'appuie pas le boutton rouge </button>
					</div>
				</p>
			</form>
			
		</div>
	</div>
	</body>
</html>