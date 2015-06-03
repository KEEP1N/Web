

	<head>
		<meta charset="utf-8" />
        <link rel="stylesheet" href="style/style.css" />
		<title>
		Corp'Access - Société de sécurité informatique
		</title>
	</head>
	
	<body>
		<?php
			if (isset($_SESSION['empl_mail'])) :?>
			<li>
			<a href="index.php?task=logout"><input type="button" class="deconnect" id="deconnect" value=""/></a>
			</li>
		<?php endif; ?>
		

		<header>
			<style type="text/css">
				a:link 
				{ 
					text-decoration:none; 
				}
			</style>
		<section class="logo">
		</section>
		</header>
		

	<footer>
		Copyright Corp'Access - Tous droits réservés<br/>
		<?php dateheure() ?>
	</footer>
