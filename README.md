# Reproductor de música realizado en PHP 🎵

El ejemplo consiste en un formulario que permite al usuario seleccionar una canción de una lista desplegable. 
Al hacer clic en "Reproducir", se envía una solicitud POST con el nombre de la canción seleccionada a music_player.php. 
La página PHP recupera la selección del usuario y reproduce la canción correspondiente usando una etiqueta de audio HTML.

Para que este ejemplo funcione, debes tener las canciones en formato MP3 en una carpeta llamada "music" en el mismo directorio que la página PHP.

## Reproductor de música (Versión 2)

En la versión 2 se agregó la función de buscar archivo de música:

Se agregó un formulario de búsqueda que permite al usuario buscar una canción específica. 
Al enviar la solicitud POST con la búsqueda, el código usa la función scandir para recuperar todos los archivos de la carpeta de música y luego filtra las canciones que coinciden con la búsqueda. 
Finalmente, se muestra una lista desplegable con las canciones encontradas y un botón para reproducir la selección.
