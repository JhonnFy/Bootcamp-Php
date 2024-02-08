<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    $nombre = 'Jhon Fy';

    function DimeNombre(){
        
        global $nombre;
        $nombre = "Hola ". $nombre . ", Salida Desde La Funcion.";
    }

    DimeNombre();
    print $nombre;

?>

</body>
</html>