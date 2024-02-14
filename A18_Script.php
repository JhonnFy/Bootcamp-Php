<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

       for($vUno = 0; $vUno<=10; $vUno++){
            $num =9;
            $mul = ($num * $vUno);
            echo  $num . "*" . $vUno . " = " . $mul . ".<br>";
        }

       for($vDos = 10; $vDos>=0; $vDos--){
            $nDos = ($vDos/9);
            echo $vDos . " / 9 = " . $nDos . "<br>";
        }
?>
</body>
</html>