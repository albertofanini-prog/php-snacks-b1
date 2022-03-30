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
    <style>
        body, .container{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }
        .block-notes{
            display: flex;
            align-items: center;
            justify-content: space-around;
            width: 80%;
            list-style: none;
        }
        .post-it{
            width:300px;
            background-color:yellow;
            box-shadow: 10px 10px 5px #888888; 
            text-align: center; 
            border: 10px;
            padding: 10px;
            border-radius: 15px
        }
        .key{
            color: red;
            font-size: 28px;
            font-weight: 600;
        }
        .title{
            color: blue;
            font-size: 24px;
        }
        .author{
            color: green;
            font-size: 22px;
        }
        .text{
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <ul class="block-notes">
            <?php
            foreach ($posts as $key => $value){
                ?>
                <li class="post-it">
                    <p class="key">
                    <?php
                        echo $key
                    ?>
                    </p>
                    <?php
                        for ( $i = 0; $i < count($posts[$key]); ++$i){
                            ?>
                            <p class="title">
                                <?php
                                    echo $posts[$key][$i]['title']
                                ?>                                            
                            </p>
                            <?php
                            ?>
                            <p class="author">
                                <?php
                                    echo $posts[$key][$i]['author']
                                ?>                                    
                            </p>
                            <?php
                            ?>
                            <p class="text">
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