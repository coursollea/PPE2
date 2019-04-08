
﻿<?php include('mainMenuBar.php'); ?>
<article>
	<h1> Accueil </h1>
					
		<?php 
						
			if(isset($_GET['modification_compte']))
			{
				modifyAccount($_GET['username2'], $_GET['password'], $_GET['imgLink']);
				echo redirectMessage($_GET['msg']);
			}
			else if(isset($_GET['msg']))

						if(isset($_POST['modification_compte']))
						{
							modifyAccount($_POST['username2'], $_POST['password'], $_POST['imgLink']);
							echo redirectMessage($_POST['msg']);
						}
						else if(isset($_GET['msg']))
							echo redirectMessage($_GET['msg']);

					
		?>
				
</article>
	</body>
</html>

<script src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'> </script>
<script src = '../scripts/accueil/accueilButtons.js'></script>
<script src = '../scripts/accueil/mon_compteButton.js'></script>