dame los comando para crear da uno

Para que no te pierdas, aquí tienes la lista maestra de comandos que debes ejecutar en tu terminal (dentro de la carpeta de tu proyecto) para crear cada pieza de tu API de CineStar.

1. Preparar la API (Solo una vez)
Si tu proyecto es nuevo, activa el soporte para rutas de API:

Bash
php artisan install:api
2. Generar Modelos y Controladores
Ejecuta estos comandos uno por uno para crear la estructura de Películas y Cines:

Para las Películas:

Bash
php artisan make:model Pelicula
php artisan make:controller Api/PeliculaController
Para los Cines:

Bash
php artisan make:model Cine
php artisan make:controller Api/CineController
3. Comandos de Verificación
Si quieres estar seguro de que las rutas se crearon bien después de que edites el archivo routes/api.php, usa este comando:

Bash
php artisan route:list --path=api
Este comando te mostrará una tabla con todas tus URLs disponibles (ej. GET api/peliculas).

4. Ejecutar el Servidor
Para que tu HTML pueda "hablar" con Laravel, el servidor debe estar encendido:

Bash
php artisan serve
Resumen de archivos creados
Cuando ejecutas los comandos anteriores, Laravel crea estos archivos que debes editar (como vimos en los pasos anteriores):