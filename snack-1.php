<?php 

$partite = [
    [
        'home' => 'Lakers',
        'away' => 'Celtics',
        'home_score' => '113',
        'away_score' => '111'
    ],
    [
        'home' => 'Phoneix',
        'away' => 'Golden State',
        'home_score' => '102',
        'away_score' => '116'
    ],
    [
        'home' => 'Miami',
        'away' => 'Orlando',
        'home_score' => '98',
        'away_score' => '102'
    ],
    [
        'home' => 'Cleveland',
        'away' => 'Clippers',
        'home_score' => '104',
        'away_score' => '109'
    ],
];

var_dump($partite);


?>

<ul>
    <?php 
    for ($i = 0; $i < count($partite); $i++) {
        $match_corrente = $partite[$i]
        ?>
        <li>
            <?php
               echo $match_corrente['home'], ' - ',  $match_corrente['away'], ' | ', $match_corrente['home_score'], '-', $match_corrente['away_score'] ;
            ?>
        </li>
        <?php
    }
    ?>
</ul>