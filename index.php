<!DOCTYPE html>
<html lang="es-MX">
<head>
    <title>Estructuras HTML</title>
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
    <link href="css/paleta.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php 
    require_once 'classes/html-generator.php';
    echo r::_('div',array(r::_('header',r::_('nav','nav inside the header')),r::_('nav','nav outside the header')));
?>
</body>
</html>