<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];


// Condizione per verificare condizione di $mail
if ( (strpos($mail, '@')) && (strpos($mail, '.')) ) {
    $mail = true;
} else {
    $mail = false;
}

// Condizione finale
if ( (strlen($name) > 3) && ($mail == true) && (is_numeric($age)) ) {
    echo 'Accesso riuscito';
} else {
    echo 'Accesso negato';
}

?>