<?php
    //Creare un array contente delle partite di basket
        //Ogni array avrà:
            //Una squadra casa
            //Una squadra ospite
            //Punti fatti da squadra casa
            //Punti fatti da squadra ospite
    //Stampare a schermo le partite con questo schema:
        //Olimpia Milano - Cantu | 55 - 60
    //var_dump('Snack 1');

    $partite = [
        [
            'casa' => 'Olimpia Milano',
            'ospite' => 'Openjobmetis Varese',
            'punti_casa' => '95',
            'punti_ospite' => '77',
        ],
        [
            'casa' => 'Virtus Segafredo Bologna',
            'ospite' => 'UNAhotels Reggio Emilia',
            'punti_casa' => '78',
            'punti_ospite' => '70',
        ],
        [
            'casa' => 'GeVi Napoli',
            'ospite' => 'New Basket Brindisi',
            'punti_casa' => '79',
            'punti_ospite' => '69',
        ],
        [
            'casa' => 'Reyer Venezia',
            'ospite' => 'Bertram Tortona',
            'punti_casa' => '69',
            'punti_ospite' => '61',
        ],
        [
            'casa' => 'Dinamo Sassari',
            'ospite' => 'Fortitudo Bologna',
            'punti_casa' => '85',
            'punti_ospite' => '79',
        ],
        [
            'casa' => 'Vanoli Cremona',
            'ospite' => 'Universo Treviso Basket',
            'punti_casa' => '74',
            'punti_ospite' => '67',
        ],
        [
            'casa' => 'VL Pallacanestro Pesaro',
            'ospite' => 'Germani Basket Brescia',
            'punti_casa' => '83',
            'punti_ospite' => '88',
        ],
        [
            'casa' => 'Aquila Basket Trento',
            'ospite' => 'Allianz Pallacanestro Trieste',
            'punti_casa' => '75',
            'punti_ospite' => '74',
        ],
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .box{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 80%;
            height: 75%;
            padding: 30px;
        }
        h1{
            font-size: 36px;
        }
        ul{
            list-style: none;
            font-size: 24px;
        }
        li{
            padding-top: 20px;
        }
    </style>
    <title>Snack 1</title>
</head>
<body>
    <div class="box">
        <h1>
            Risultati del Turno 24 di Serie A Basket:   
        </h1>
        <ul>
            <?php
                for ($i = 0; $i < count($partite); ++$i){
                    ?>
                        <li>
                            <?php echo $partite[$i]['casa']?>
                            -
                            <?php echo $partite[$i]['ospite']?>
                            |
                            <?php echo $partite[$i]['punti_casa']?>
                            -
                            <?php echo $partite[$i]['punti_ospite']?>
                        </li>
                    <?php
                }
            ?>
        </ul>
    </div>
</body>
</html>