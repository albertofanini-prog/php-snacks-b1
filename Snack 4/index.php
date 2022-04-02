<?php
    //Creare un array con 15 numeri
        //Potrà contenere lo stesso numero una sola volta
    //var_dump('Snack 4');

    $random = [];

    while (count($random) < 15){

        $number = rand(0,100);

        if (in_array($number, $random)){
            $random[] = $number;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>I numeri random sono:</h2>
    <p>
        <?php echo $random ?>
    </p>
</body>
</html>

