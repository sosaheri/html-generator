<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras HTML</title>
</head>
<body>
<?php 
    require_once 'classes/html-generator.php';
    require_once 'static/comandos.php';
    echo executethis(container,'hello word','\(div)');
?>
</body>
</html>