<?php
if(!isset($_POST['menu'])) { $_POST['menu'] = 0; }
print '
<!DOCTYPE html>
<html>
	<head>
		<meta description="">
		<meta keywords="">
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
		<style>
			a{
				color: green;
				
			}
		</style>
	</head>
		<body>
			<header>';
			include("nav.php");
			print '
			</header>
			<main>';
				if($_GET['menu']==1) {
					print '<h1>O nama</h1>';
				}
				else if($_GET['menu']==2) {
					print '<h1>Kontakt</h1>';
					include("contact.php");
				}
			print '
			</main>
			<footer>
			
			</footer>
		</body>
</html>';
?>