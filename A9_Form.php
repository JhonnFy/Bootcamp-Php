<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
   
<!-- HojaDeEstilos -->
<style>
    
table{
    background-color:#2471A3;
    padding:5px;
    border:#2E86C1 5px solid;
    color:#F7F9F9;
}

.no_validado{
    font-size:18px;
    color:#F00;
    font-weight:bold;
}

.validado{
    font-size:18px;
    color:#0C3;
    font-weight:bold;
}

.resaltar{
    color:#117A65;
    font-weight:bold;
    text-align:center;
}

.frm{
    background-color:#2E86C1;
}


/* Alert */
.alertTrue {
  padding: 20px;
  background-color: #16A085;
  color: white;
}

.alertFalse {
  padding: 20px;
  background-color: #f44336;
  color: white;
}
/* End Alert */

</style>
</head>

<body>
    <p class='resaltar'>PHP Operadores De Comparacion</p>
    
    <!-- Form -->
    <form class='frm' action="" method="post" name="datos_usuario"
    id='datos_usuario'>
        <table>
            <tr>
                <td>Nombre:</td>
                <td>
                    <label for="Nombre Usuario"></label>
                    <input type="text" name="nombre_usuario"
                    id='nombre_usuario'>
                </td>
            </tr>

            <tr>
                <td>Edad:</td>
                <td>
                    <label for="Edad_Usuario"></label>
                    <input type="text" name="edad_usuario" 
                    id='edad_usuario'>
                </td>
            </tr>

            <tr>
                <td colspan="2" alaign="center">
                    <input type="submit" name="enviando" id="enviando"
                    value="Enviar">
                </td>
            </tr>
        </table>
    </form>

<?php

    if(isset($_POST["enviando"])) {

        $usario=$_POST["nombre_usuario"];
        $edad=$_POST["edad_usuario"];


        if($usario =="JhonFy"){
            echo "<p class='alertTrue'>¡Aprobado!</p>";
        } else {
            echo "<p class='alertFalse'>¡Denegado!</p>";
        }
    }


?>

</body>
</html>