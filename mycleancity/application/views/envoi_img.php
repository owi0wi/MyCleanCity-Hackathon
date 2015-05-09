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
		<form enctype="multipart/form-data" action="http://localhost/mycleancity-hackathon/mycleancity/index.php/uploadController/dataPushed" method="post">
			<input type="hidden" name="MAX_FILE_SIZE" value="7000000" />
			<input type="file" name="picture" size=50 /><br>
			Cle : <input type="text" name="data"/><br>
			<input type="submit" value="Envoyer" />
		</form>
		<p><a href="http://localhost/frames/CodeIgniter/index.php/main/view_image">Liste</a></p>
	</body>
</html>