<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$varUno = "JhonFy";
$varDos = "JhonFy";


$estado =strcmp($varUno, $varDos);

if(!$estado){
    print "La Cadena Coincide";
} else{
    print "La Cadena No Coincide";
}

?>

</body>
</html>