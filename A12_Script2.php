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