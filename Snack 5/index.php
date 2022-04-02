<?php
    // var_dump('Snack 5');

    $one_paragraph =
    '
        La divisione di Google ha notato un\'attività di phishing del gruppo rivolta ai corpi militari di molteplici Paesi dell\'est Europa e a un Centro di Eccellenza della Nato.
        "Abbiamo osservato un numero crescente di attori di minacce che utilizzano la guerra come esca nelle campagne di phishing e malware - spiega il Thread Analysis Group di Google - Provengono da Cina, Iran, Corea del Nord e Russia e hanno utilizzato vari temi legati alla guerra in Ucraina".
        In particolare spiegano i ricercatori Coldriver, un attore di minacce con sede in Russia a volte indicato come Calisto, "ha lanciato campagne di phishing prendendo di mira diverse Ong e think tank con sede negli Stati Uniti, l\'esercito di un paese dei Balcani e un appaltatore della difesa con sede in Ucraina".
        Per la prima volta il Tag ha osservato campagne di questo gruppo "rivolte alle forze armate di diversi paesi dell\'Europa orientale, nonché a un Centro di eccellenza della Nato", al momento "la percentuale di successo di queste campagne è sconosciuta".
    ';

    $more_paragrafhs = str_replace('.', '.<p>', $one_paragraph);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>
    <h3>
        Paragrafo singolo:
    </h3>
    <p>
        <?php
            echo $one_paragraph;
        ?>
    </p>
    <h3>
        Paragrafo diviso:
    </h3>
    <p>
        <?php
            echo $more_paragrafhs;
        ?>
    </p>
</body>
</html>

<!-- Scrivere un paragrafo medio-lungo, contente diverse frasi.
    Suddividere in più paragrafi
        Ogni punto un paragrafo. -->