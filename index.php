<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras HTML</title>
</head>
<body>
<?php 
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    include 'functions/start.php'; 
    include 'functions/omision.php';
    include 'functions/mezclar.php';
    include 'functions/build.php';
    include 'functions/linker.php';
    foreach(linker('4-div_4-!class_container/container/block/block','') as $item){
        echo $item;
    }
?>
</body>
</html>