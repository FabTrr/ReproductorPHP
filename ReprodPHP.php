<!DOCTYPE html>
<html>
<head>
	<title>Reproductor de música</title>
</head>
<body>
	<h1>Reproductor de música</h1>
	<form action="music_player.php" method="post">
		<select name="song">
			<option value="song1.mp3">Canción 1</option>
			<option value="song2.mp3">Canción 2</option>
			<option value="song3.mp3">Canción 3</option>
		</select>
		<input type="submit" value="Reproducir">
	</form>

	<?php
		if (isset($_POST['song'])) {
			$selected_song = $_POST['song'];
			echo "<audio controls>";
			echo "<source src='music/$selected_song' type='audio/mpeg'>";
			echo "Tu navegador no soporta el reproductor de audio.";
			echo "</audio>";
		}
	?>

</body>
</html>