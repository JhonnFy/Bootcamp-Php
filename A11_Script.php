<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
.back{
    background-color:#F4F6F7;
}

.text{
    color:#3498DB;
    text-align:center;
}

.textT{
    color:#D4E6F1;
}

.operation {
  padding: 20px;
  background-color: #16A085;
  color: white;
}

</style>
</head>

<body>
<h2 class='text'>Mathematical Operators</h2>

<form action="" class='back' name="form1" method="post">
  <label for="fname" class='text'>Insert First Number:</label><br>
  <input type="text" id="primer_numero" name="primer_numero" class='textT'><br>
  <label for="lname" class='text'>Insert Second Number:</label><br>
  <input type="text" id="segundo_numero" name="segundo_numero"  class='textT'><br><br>
  
  <select name="operation" id="operation">
	<option>+</option>
	<option>-</option>
	<option>*</option>
	<option>/</option>
  </select>

  <input type="submit" value="Submit" name="btn" id="btn"><br> 
  <p class='back'>If you click on the "Submit" button, the form performs a mathematical operation</p>
</form> 

<?php
        if(isset($_POST["btn"])){
            $cUno = $_POST["primer_numero"];
            $cDos = $_POST["segundo_numero"];
            $cOp = $_POST["operation"];

            // Sumar
            if(!strcmp("+",$cOp)){
                $rstSum = ($cUno+$cDos);
                echo "<p class='operation'>Suma == " . $rstSum . "</p>";
            }

            // Restar
            if(!strcmp("-",$cOp)){
                $rstRes = ($cUno-$cDos);
                echo "<p class='operation'>Resta == " . $rstRes . "</p>";
            }

            // Multiplicar
            if(!strcmp("*",$cOp)){
                $rstMul = ($cUno*$cDos);
                echo "<p class='operation'>Multiplicación  == " . $rstMul . "</p>";
            }

            // Dividir
            if(!strcmp("/",$cOp)){
                $rstDiv = ($cUno/$cDos);
                echo "<p class='operation'>División  == " . $rstDiv . "</p>";
            }

        }
?>

</body>
</html>
