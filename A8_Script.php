<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$varUno = 8;
$varDos = "8";
$varTres = "Jhon";

function OpIgual(){
    print "Operador Igual Que.<br>";
}

function OpIdentico(){
    print "<br><br>Operador Identico Que.<br>";
}

function OpDiferente(){
    print "<br><br>Operador Diferente a.<br>";
}


if($varUno == $varDos){
    print  OpIgual() . "Son Iguales";
}else{
    print OpIgual() . "No Son Iguales";
}

if($varUno === $varDos){
    print OpIdentico() . "Son Iguales";
}else{
    print OpIdentico() . "No Son Iguales";
}

if($varUno != $varDos){
    print OpDiferente() . "No Son Diferentes";
}else{
    print OpDiferente() . "Son Diferentes";
}


?>

</body>
</html>