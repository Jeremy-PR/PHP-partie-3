<?php





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

        $affichage = "on tient le bon bout"; 

       for ($variable = 1 ; $variable <=100 ; $variable+=15){
        echo "{$affichage} <br>";
       
       }
      
        ?>
    </h1>




</body>

</html>