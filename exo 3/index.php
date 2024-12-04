<?php

$première = 100;
$deuxième = 67;



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
        while ($première >= 10) {
            $resultat = $première * $deuxième;
            echo "{$resultat} <br>";
            $première--;
        }
       
        ?>
    </h1>




</body>

</html>