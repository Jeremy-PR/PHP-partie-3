<?php

$variable =1;




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <h1>
        <?php
        while ($variable < 10) {
           echo "{$variable} <br>";  
        $variable += $variable / 2;
        }
       
        ?>
    </h1>




</body>

</html>