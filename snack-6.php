<?php
 
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
    ];
 
?>

<div style=background-color:green >
    <?php
        echo 'Nomi insegnanti: ','<br>';
        foreach($db['teachers'] as $teacher) {
            echo $teacher['name'],' ';
            echo $teacher['lastname'], '<br>';
        }
    ?>
</div>

<div style=background-color:lightgrey >
    <?php
        echo 'Nomi PM: ','<br>';
        foreach($db['pm'] as $pm) {
            echo $pm['name'],' ';
            echo $pm['lastname'], '<br>';
        }
    ?>
</div>