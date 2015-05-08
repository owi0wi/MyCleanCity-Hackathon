<html>
	<head>
		<title>Stock d'images</title>
	</head>
	<body>
		<?php
		// include ("transfert.php");
		// if ( isset($_FILES['fic']) )
		// {
		// 		transfert();
		// }
		?>
		<h3>Envoi d'une image</h3>
		<form enctype="multipart/form-data" action="http://localhost/mycleancity-hackathon/mycleancity/index.php/uploadController/reponse" method="post">
			<input type="hidden" name="MAX_FILE_SIZE" value="7000000" />
			<input type="file" name="fic" size=50 />
			<input type="submit" value="Envoyer" />
		</form>
		<p><a href="http://localhost/frames/CodeIgniter/index.php/main/view_image">Liste</a></p>
	</body>
</html>