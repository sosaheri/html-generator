<!DOCTYPE html>
<html lang="es-MX">
<head>
    <title>Estructuras HTML</title>
</head>
<body>
<?php 
    require_once 'classes/html-generator.php';
    echo r::_('div',array(r::_('header',r::_('nav','nav inside the header')),r::_('nav','nav outside the header')));
?>
</body>
</html>