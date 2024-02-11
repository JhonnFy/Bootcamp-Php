<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
.txt{
    color:#1F618D;
    background-color:#F4F6F7;
    text-align:center;
}

.inp{
    color:#28B463;
}
</style>
</head>

<body>
    
<h1 class="txt">Mathematics Operator</h1>

<form action="" method="POST" name="frm">
    <label for="n1" name="lnumberOne" id="lnumberOne">Numer One</label><br>
    <input class="inp" type="text" name="numberOne" id="numberOne"><br>
    <label for="n2" name="lnumberTwo" id="lnumberTwo">Number Two</label><br>
    <input class="inp" type="text" name="numberTwo" id="numberTwo"><br>

    <h2>Select Option Please</h2>

    <select name="selectOpt" id="selectOpt">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type="submit" value="Send Please" name="btn_send" id="btn_send">
</form>


<?php
    if(isset($_POST["btn_send"])){
        $vOne = $_POST["numberOne"];
        $vTwo = $_POST["numberTwo"];
        $opc = $_POST["selectOpt"];

        if(!strcmp("+",$opc)){
            $rstSum = ($vOne+$vTwo);
            echo "<p class='txt'>Sumar == " . $rstSum . "</p>";
        }

        if(!strcmp("-",$opc)){
            $rstRst = ($vOne-$vTwo);
            echo "<p class='txt'>Restar == " . $rstRst . "</p>";
        }

        if(!strcmp("*",$opc)){
            $rstMlt = ($vOne * $vTwo);
            echo "<p class='txt'>Multiplicar == " . $rstMlt . "</p>";
        }

        if(!strcmp("/",$opc)){
            $rstDiv = ($vOne / $vTwo);
            echo "<p class='txt'>Dividir == " . $rstDiv . "</p>";
        }

    }
?>

</body>
</html>