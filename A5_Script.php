<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    function DimeContador(){
        static $contador=0;
        $contador++;

        echo $contador . "<br>";
    }

    DimeContador();
    DimeContador();
    DimeContador();
    DimeContador();

?>

</body>
</html>