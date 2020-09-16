<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$partite = [
    [
        'sq1'=> 'Pistoia',
        'sq2'=> 'Reggiana',
        'pt1'=> '86',
        'pt2'=> '79',
    ],
    [
        'sq1'=> 'Brescia',
        'sq2'=> 'Trieste',
        'pt1'=> '76',
        'pt2'=> '74',
    ],
    [
        'sq1'=> 'Venezia',
        'sq2'=> 'Treviso',
        'pt1'=> '79',
        'pt2'=> '73',
    ],
    [
        'sq1'=> 'Trento',
        'sq2'=> 'Cantù',
        'pt1'=> '79',
        'pt2'=> '71',
    ],
    [
        'sq1'=> 'Olimpia Milano',
        'sq2'=> 'Cremona',
        'pt1'=> '77',
        'pt2'=> '74',
    ],
    [
        'sq1'=> 'Pesaro',
        'sq2'=> 'Brindisi',
        'pt1'=> '77',
        'pt2'=> '103',
    ],
    [
        'sq1'=> 'Fortitudo Bologna',
        'sq2'=> 'Roma',
        'pt1'=> '95',
        'pt2'=> '92',
    ],
];

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Basket</title>
    </head>
    <body>
        <h1>Risultati basket</h1>
        <h2>Lega A</h2>
        <h3>Stagione 2019/2020</h3>
        <h4>Giornata 22</h4>
        <ul>
            <?php for ($i=0; $i < count($partite); $i++) { ?>
                <li>
                    <p><?php echo $partite[$i]['sq1'] .' - '. $partite[$i]['sq2'] . ' | ' . $partite[$i]['pt1'] . ' - ' . $partite[$i]['pt2']; ?></p>
                </li>

            <?php } ?>

        </ul>
    </body>
</html>
