# Reproductor de m煤sica realizado en PHP 馃幍

El ejemplo consiste en un formulario que permite al usuario seleccionar una canci贸n de una lista desplegable. 
Al hacer clic en "Reproducir", se env铆a una solicitud POST con el nombre de la canci贸n seleccionada a music_player.php. 
La p谩gina PHP recupera la selecci贸n del usuario y reproduce la canci贸n correspondiente usando una etiqueta de audio HTML.

Para que este ejemplo funcione, debes tener las canciones en formato MP3 en una carpeta llamada "music" en el mismo directorio que la p谩gina PHP.

## Reproductor de m煤sica (Versi贸n 2)

En la versi贸n 2 se agreg贸 la funci贸n de buscar archivo de m煤sica:

Se agreg贸 un formulario de b煤squeda que permite al usuario buscar una canci贸n espec铆fica. 
Al enviar la solicitud POST con la b煤squeda, el c贸digo usa la funci贸n scandir para recuperar todos los archivos de la carpeta de m煤sica y luego filtra las canciones que coinciden con la b煤squeda. 
Finalmente, se muestra una lista desplegable con las canciones encontradas y un bot贸n para reproducir la selecci贸n.
