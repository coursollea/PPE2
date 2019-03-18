<?php
	
	include('dbFunctions.php');
	
	if(!userExists($_GET['username']))
	{
		if(!isAddressAlreadyUsed($_GET['email']))
		{
			if($_GET['password'] == $_GET['confirmpassword'])
			{
				echo 1;
			}
			else
			{
				echo -0;
			}
		}
		else
		{
			echo -1;
		}
	}
	else
	{
		echo -2;
	}
	
?>