<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    
<?php
    function increment($data){

        $data ++;
        return $data;
    }
    echo increment(5);
?>
</body>
</html>