<style>
.operation {
  padding: 20px;
  background-color: #16A085;
  color: white;
}
</style>

<?php

        if(isset($_POST["btn"])){
            $cUno = $_POST["primer_numero"];
            $cDos = $_POST["segundo_numero"];
            $cOp = $_POST["operation"];

            // Paso De Parametros
            DimeOperacion($cOp);            
        }

            function DimeOperacion($operacion){
                /* Operacion Sumar*/
                
                //Ambito de variables
                global $cUno;
                global $cDos;
                if(!strcmp("+",$operacion)){
                    $rstSum = ($cUno+$cDos);
                    echo "<p class='operation'>Suma == " . $rstSum . "</p>";
                }

                /* Operacion Restar*/

                //Ambito de variables
                global $cUno;
                global $cDos;
                if(!strcmp("-",$operacion)){
                    $rstRes = ($cUno-$cDos);
                    echo "<p class='operation'>Resta == " . $rstRes . "</p>";
                }

                /* Operacion Multiplicar*/
               
                //Ambito de variables
                global $cUno;
                global $cDos;
                if(!strcmp("*",$operacion)){
                    $rstMul = ($cUno*$cDos);
                    echo "<p class='operation'>Multiplicación  == " . $rstMul . "</p>";
                }


                /* Operacion Multiplicar*/
               
                //Ambito de variables
                global $cUno;
                global $cDos;
                if(!strcmp("/",$operacion)){
                    $rstDiv = ($cUno/$cDos);
                    echo "<p class='operation'>División  == " . $rstDiv . "</p>";
                }
            }
?>