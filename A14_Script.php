<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>

<style>

.txt{
    color:#2E86C1;
    text-align:center;
}

.frm{
    color:#117A65;
}

.exit{
    color:#D0D3D4;
    background-color:#3498DB;
}
</style>

</head>
<body>

<h1 class="txt">Personal Data</h1>

<form action="" name="" id="" method="POST">
    <!-- Name -->
    <label class="frm" for="nm" name="lname" id="lname">Name</label><br>
    <input type="text" name="dname" id="dname"><br>
    <!-- Number -->
    <label class="frm" for="lnumbers" name="" id="">Number</label><br>
    <input type="text" name="dnumber" id="dnumber"><br><br>

    <input type="submit" name="btn_go" id="btn_go" value="Goo">
</form>

<?php
    if(isset($_POST["btn_go"])){
        $vOne = $_POST["dname"];
        $vTwo = $_POST["dnumber"];

        if($vTwo <= "10"){
            echo "<p class='frm'>Number In Range Cero To Ten.</p>";
        }else if($vTwo >="11" && $vTwo <="20"){
            echo "<p class='frm'>Number In Range Cero To Twenty.</p>";
        }else if($vTwo >= "21" && $vTwo <="30"){
            echo "<p class='frm'>Number In Range Ceto To Thirty";
        }else if($vTwo >="31" && $vTwo <="40"){
            echo "<p class='frm'>Number In Range Ceto To Forty";
        }else if($vTwo >="41" && $vTwo <="50"){
            echo "<p class='frm'>Number In Range Cero To Fifty";
        }else if($vTwo >="51" && $vTwo <="60"){
            echo "<p class='frm'>Number In Range Cero To Sixty";
        }else if($vTwo >="61" && $vTwo <="70"){
            echo "<p class='frm'>Number In Range Cero To Eighty";
        }else if($vTwo >="80" && $vTwo <="90"){
            echo "<p class='frm'>Number In Range Cero To Ninety";
        }else if($vTwo >="91" && $vTwo <="100"){
            echo "<p class='frm'>Number In Range Cero To Hundred";
        }else if($vTwo <= "0" || $vTwo >"100"){
            echo "<p class='frm'>Not Found";
        }
    }
?>

    
</body>
</html>