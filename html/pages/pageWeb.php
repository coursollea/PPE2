<?php include ('mainMenuBar.php'); ?>
			<article>
			
				<?php 					
					if(isset($_GET['msg']))
						echo redirectMessage($_GET['msg']);				
					?>
				
				<div class = 'mainContainer'>
					<p class = 'sujetEntete'><?php if(isset($_GET["categorie"])){ echo LocalisePage($_GET["categorie"]);}?></p>
					
					<nav  class = 'sujetnav'>
						<a href = 'création.php'> Créer un sujet </a>								 
					</nav>

					<?php
					
						echo createTopicLinkFor(1);
						echo createTopicLinkFor(1);
						echo createTopicLinkFor(1);
					?>

				</div>
				
		</article>
	</body>
</html>

<script src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'> </script>
<script src = '../scripts/accueil/accueilButtons.js'></script>
