<?php
    // var_dump('Snack 6');
    
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
    <style>
        body{
            display: flex;
        }
        .teachers{
            background-color: silver;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <?php
    for ($i = 0; $i < count($db); $i++){
        $rule = array_keys($db)[$i];
    ?>
    <?php
        if ($rule === 'teachers'){
    ?>
        <div class="teachers">
        <h1>
            Type = <?php echo $rule; ?>
        </h1>
        <?php
        for ($i = 0; $i < count($db[$rule]); $i++){
            $teach = $db[$rule][$i];
        ?>
            <p>Nome: <?php echo $teach['name']; ?></p>
            <p>Cognome: <?php echo $teach['lastname']; ?></p>
        <?php
            }
        ?>
        </div>
        <?php
            } else{
        ?>
            <div class="pm">
            <?php
            for ($i = 0; $i < count($db[$rule]); $i++){
                $management = $db[$rule][$i];
            ?>
                <p>Nome: <?php echo $management['name']; ?></p>
                <p>Cognome: <?php echo $management['lastname']; ?></p>
            <?php
                }
            ?>
            </div>
            <?php    
                }
            ?>
        <?php
        }
        ?>
</body>
</html>

<!--
Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampare l'array mettendo 
    gli insegnanti in un rettangolo grigio
    i PM in un rettangolo verde
-->