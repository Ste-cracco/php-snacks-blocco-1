<?php

$studenti = [
    'studente' => [
        [
            'name' => 'Stefano',
            'lastname' => 'Cracco',
            'voti' => [4, 3, 4, 5, 6, 6, 5]
        ],
        [
            'name' => 'Giuseppe',
            'lastname' => 'Verdi',
            'voti' => [4, 6, 7, 7, 7, 6, 9]
        ],
        [
            'name' => 'Pippo',
            'lastname' => 'La Scopa',
            'voti' => [5, 3, 5, 6, 5, 9, 9]
        ]
    ]
];

$media = 0;

// var_dump($studenti);

foreach($studenti['studente'] as $studente) {
    echo $studente['name'],' ';
    echo $studente['lastname'], '<br>';
    $somma = array_sum($studente['voti']);
    $media = floor($somma / count($studente['voti']));
    echo 'Media voti: ', $media, '<br> <br>';
}

?>