<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>

<style>
.txt{
    color:#1A5276;
    background-color:#E8F6F3;
    text-align:center;
}

.ftp{
    background-color:#EBF5FB;
}
</style>

</head>
<body>

<h2 class="txt">Enter The Category Number As Appropriate</h2>

<form class="ftp" action="" method="POST" name="frm" id="frm">
    <label for="School">School(1)</label><br>
    <input type="text" name="school" id="school"><br>

    <label for="Toys">Toys(2)</label><br>
    <input type="text" name="toys" id="toys"><br>
        
    <label for="Animals">Animals(3)</label><br>
    <input type="text" name="animals" id="animals"><br>

    <label for="Clothes">Clothes(4)</label><br>
    <input type="text" name="clothes" id="clothes"><br>

    <label for="Food">Food(5)</label><br>
    <input type="text" name="food" id="food"><br>

    <label for="Fruit">Fruit(6)</label><br>
    <input type="text" name="fruit" id="fruit"><br>

    <label for="Transportation">Transportation(7)</label><br>
    <input type="text" name="transportation" id="transportation"><br>
    
    <label for="Trades">Trades(8)</label><br>
    <input type="text" name="trades" id="trades"><br>

    <label for="Furniture">Furniture(9)</label><br>
    <input type="text" name="furniture" id="furniture"><br>

    <label for="Flowers">Flowers(10)</label><br>
    <input type="text" name="flowers" id="flowers"><br><br>

    <input type="submit" name="send" id="send">
</form>

<?php

if(isset($_POST["send"])){
    $vSchool = $_POST["school"];
    $vToys = $_POST["toys"];
    $vAnimals = $_POST["animals"];
    $vClothes = $_POST["clothes"];
    $vFood = $_POST["food"];
    $vFruit = $_POST["fruit"];
    $vTransportation = $_POST["transportation"];
    $vTrades = $_POST["trades"];
    $vFurniture = $_POST["furniture"];
    $vFlowers = $_POST["flowers"];
}

        switch(true){            
            case ($vSchool == "1"):
                    echo "Hola Desde La Variable Uno";
                
            case 2:
                if($vToys == "2"){
                    echo "Hola Desde La Varibale Dos";
                }
            case 3:
                if($vAnimals == "3"){
                    echo "Hola Desde La Variable Tres";
                }
            case 4:
                if($vClothes == "4"){
                    echo "Hola Desde La Variable Cuatro";
                }
            case 5:
                if($vFood == "5"){
                    echo "Hola Desde Cinco";
                }
            case 6:
                if($vFruit == "6"){
                    echo "Hola Desde Seis";  
                }
            case 7:
                if($vTransportation == "7"){
                    echo "Hola Desde Siete";
                }
            case 8:
                if($vTrades == "8"){
                    echo "Hola Desde Ocho";
                }
            case 9:
                if($vFurniture == "9"){
                    echo "Hola Desde Nueve";
                }
            case 10:
                if($vFlowers == "10"){
                    echo "Hola Desde Diez";
                }    
            }
?>

</body>
</html>