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
    $is_long = strlen($name);

    $mail = $_GET['mail'];
    $has_dot = strpos($mail,'.');
    $has_at = strpos($mail,'@');

    $age = $_GET['age'];
    $is_number = is_numeric($age);

    //var_dump($name);
    //var_dump($mail);
    //var_dump($age);
    //var_dump($is_long);
    //var_dump($has_dot);
    //var_dump($has_at);
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
            if($is_long >= 3){
                ?>
                <div>
                    Il tuo username ha almeno 3 caratteri, è valido.
                </div>
                <?php
            } else {
                ?>
                <div>
                    Il tuo username non ha almeno 3 caratteri, non è valido.
                </div>
                <?php
            }
        ?>
        <?php
            if($has_dot && $has_at){
                ?>
                    <div>
                        La tua e-mail contiene una chiocciola e un punto, è valida. 
                    </div>
                <?php
            } else {
                ?>
                    <div>
                        La tua e-mail non contiene una chiocciola e un punto, non è valida. 
                    </div>
                <?php
            }
        ?>
        <?php
            if($is_number = true){
                ?>
                    <div>
                        L'età da te inserita ha un formato corretto, è valida.
                    </div>
                <?php
            } else{
                ?>
                    <div>
                        L'età da te inserita non ha un formato corretto, non è valida.
                    </div>
                <?php
            }
        ?>
    </div>
</body>
</html>