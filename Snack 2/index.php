<?php
    //Passare come parametri GET
        //Name
        //Mail
        //Age
    //Verificare che
        //Name: sia più lungo di 3 caratteri
        //Mail: contenga un punto e una virgola
        //Age: sia un numero
    //Se è ok stampare 'Accesso Riuscito' 
    //Se non è ok stampare 'Accesso Negato' 
    //var_dump('Snack 2');

    $name = $_GET['name'];

    $mail = $_GET['mail'];
    $has_dot = strpos($mail,'.');
    $has_at = strpos($mail,'@');

    $age = $_GET['age'];

    var_dump($name);
    var_dump($mail);
    //var_dump($has_dot);
    //var_dump($has_at);
    var_dump($age);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <div>
        <?php
            if($has_dot && $has_at){
                ?>
                    <div>
                        E-mail valida
                    </div>
                <?php
            } else {
                ?>
                    <div>
                        E-mail non valida
                    </div>
                <?php
            }
        ?>
    </div>
</body>
</html>