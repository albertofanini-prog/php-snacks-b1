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

    $age = $_GET['age'];

    var_dump($name);
    var_dump($mail);
    var_dump($age);
?>