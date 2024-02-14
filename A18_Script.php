<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
.forOne{
    color:#2E86C1;
    background-color:#F7F9F9;
}

.forTwo{
    color:#229954;
    background-color:#F7F9F9;
}

</style>

</head>
<body>
    
<?php

       for($vUno = 0; $vUno<=10; $vUno++){
            $num =9;
            $mul = ($num * $vUno);
            echo  "<p class='forOne'>$num * $vUno = $mul </p>";
        }

       for($vDos = 10; $vDos>=0; $vDos--){
            $nDos = ($vDos/9);
            echo "<p class='forTwo'>9 / $vDos = $nDos";
        }
?>
</body>
</html>