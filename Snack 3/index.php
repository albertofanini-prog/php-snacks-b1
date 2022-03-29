<?php
    //Creare un array di array
        //Ogni figlio avrà come chiave
            //Una data in questo formato: DD-MM-YYYY
            //Un valore un array di èpst associati alla data.
    //Stampare ogni data con i relativi post 
    //var_dump('Snack 3');

    $posts = [

        '15/03/2020' => [
            [
                'title' => 'Post 1',
                'author' => 'Umberto Ansaldi',
                'text' => 'Questo virus non è niente, passerà subito'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Umberto Ansaldi',
                'text' => 'Basta rimanere calmi'
            ],
        ],
        '03/04/2020' => [
            [
                'title' => 'Post 3',
                'author' => 'Umberto Ansaldi',
                'text' => 'Forse è un po peggio di come pensavo...'
            ]
        ],
        '17/04/2020' => [
            [
                'title' => 'Post 4',
                'author' => 'Umberto Ansaldi',
                'text' => 'Ce la faremooooo'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Umberto Ansaldi',
                'text' => 'Non si trova più la farina...'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Umberto Ansaldi',
                'text' => 'Le mascherine costano 5€ ciascuna...'
            ]
        ],
    ];
    //print_r(array_keys($posts));
    //$posts = array_values($posts);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
    <div>
        <ul>
            <?php
            foreach ($posts as $key => $value){
                ?>
                <li>
                    <?php
                        echo $key
                    ?>
                    <?php
                        for ( $i = 0; $i < count($posts[$key]); ++$i){
                            ?>
                            <p>
                                <?php
                                    echo $posts[$key][$i]['title']
                                ?>                                            
                            </p>
                            <?php
                            ?>
                            <p>
                                <?php
                                    echo $posts[$key][$i]['author']
                                ?>                                    
                            </p>
                            <?php
                            ?>
                            <p>
                                <?php
                                    echo $posts[$key][$i]['text']
                                ?>                                                                
                            </p>
                            <?php                                                       
                        }
                    ?>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</body>
</html>