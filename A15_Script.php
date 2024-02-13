<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    
<form action="" method="POST" name="frm" id="frm">
    <label for="School" name="lschool" id="lschool">School</label><br>
    <input type="text" name="school" id="school"><br>

    <label for="">Toys</label><br>
    <input type="text" name="toys" id="toys">
        

    <input type="submit" name="send" id="send">
</form>

<?php

if(isset($_POST["send"])){
    $vSchool = $_POST["school"];
    $vToys = $_POST["toys"];
}

        switch(isset($_POST["send"])){            
            case 1:
                if($vSchool == "1"){
                    echo "Hola Desde La Variable Uno";
                }
            case 2:
                if($vToys == "2"){
                    echo "Hola Desde La Varibale Dos";
                }
            case 3:
            
            }
?>

</body>
</html>