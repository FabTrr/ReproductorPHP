<!DOCTYPE html>
<html>
<head>
	<title>Reproductor de música Version 2</title>
</head>
<body>
	<h1>Reproductor de música Version 2</h1>
	<form action="music_player.php" method="post">
		<input type="text" name="search" placeholder="Buscar canción...">
		<input type="submit" value="Buscar">
	</form>

	<?php
		if (isset($_POST['search'])) {
			$search_query = $_POST['search'];
			$music_folder = "music/";
			$music_files = scandir($music_folder);

			$found_songs = array();
			foreach ($music_files as $file) {
				if (strpos($file, $search_query) !== false) {
					array_push($found_songs, $file);
				}
			}

			if (count($found_songs) > 0) {
				echo "<form action='music_player.php' method='post'>";
				echo "<select name='song'>";
				foreach ($found_songs as $song) {
					echo "<option value='$music_folder$song'>$song</option>";
				}
				echo "</select>";
				echo "<input type='submit' value='Reproducir'>";
				echo "</form>";
			} else {
				echo "No se encontraron canciones con la búsqueda '$search_query'";
			}
		}

		if (isset($_POST['song'])) {
			$selected_song = $_POST['song'];
			echo "<audio controls>";
			echo "<source src='$selected_song' type='audio/mpeg'>";
			echo "Tu navegador no soporta el reproductor de audio.";
			echo "</audio>";
		}
	?>

</body>
</html>