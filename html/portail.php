<!DOCTYPE html>
<html>
	<head>
		<meta charset = 'utf-8'>
		<title> Redirection en cours </title>
		<link rel = 'stylesheet' href = 'style.css'
	</head>
</html>

<?php
	
	include('dbFunctions.php');
	session_start();
	
	if(isset($_GET['connexion']))
	{
		if(!isConnected())
		{
			
			$verify = verifyLogs($_GET['username'],$_GET['password']);
			if($verify == 1)
			{
				connect($_GET['username']); ?>
				
				<form method = 'GET' action = 'accueil.php' id = 'autoForm'>
					<input type = 'hidden' name = 'msg' value = '2'>
				</form>
				
				<script type = 'text/javascript'> document.getElementById('autoForm').submit(); </script> <?php 
				
				
				exit();
			}
			else if($verify == -1)
			{ ?>
				
				<form method = 'GET' action = 'accueil.php' id = 'autoForm'>
					<input type = 'hidden' name = 'msg' value = '0'>
				</form>
				
				<script type = 'text/javascript'> document.getElementById('autoForm').submit(); </script> <?php 
				
				
				exit();
			}
			else if($verify == 0)
			{  ?>
				<form method = 'GET' action = 'accueil.php' id = 'autoForm'>
					<input type = 'hidden' name = 'msg' value = '1'>
				</form>
				
				<script type = 'text/javascript'> document.getElementById('autoForm').submit(); </script> <?php 
				
				
				exit();
			}
				
		}
				
	}
	
	
	
?>