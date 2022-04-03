<?php
    // var_dump('Snack 7');

    $alunni = [
        [
            'nome' => 'Alberto',
            'cognome' => 'Fanini',
            'voti' => [5, 8, 8, 6, 7]
        ],
        [
            'nome' => 'Alessio',
            'cognome' => 'Vietri',
            'voti' => [9, 7, 8, 5, 7]
        ],
        [
            'nome' => 'Massimo',
            'cognome' => 'Piazza',
            'voti' => [6, 6, 8, 9, 7]
        ],
        [
            'nome' => 'Gianluca',
            'cognome' => 'Lomarco',
            'voti' => [9, 8, 8, 9, 7]
        ],
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
    <style>
        .media{
            padding-bottom: 40px;
        }
    </style>
</head>
<body>
    <?php
        for ($i = 0; $i < count($alunni); $i++){
            $alunno = $alunni[$i];
            $numero_voti = count($alunno['voti']);
            $somma = array_sum($alunno['voti']);
            $media = $somma / $numero_voti;
            ?>
            <p>
                Alunno: <?php echo $alunno['nome']?> <?php echo $alunno['cognome']?>
            </p>
            <p class="media">
                Media voto: <?php echo $media ?>
            </p>
            <?php
        }
    ?>
</body>
</html>

<!-- Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà 
    Nome, 
    Cognome
    un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno -->