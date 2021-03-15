<?php  require'variables.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <?php 
    echo $name; ?>
    <br>
    <?php
    foreach($list as $value){
        echo $value;
    }
    ?>
    
</body>
</html>