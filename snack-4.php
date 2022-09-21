<?php

$numeri = [];

while (count($numeri) < 15) {
    $numero = rand(1, 100);
    if(!in_array($numero, $numeri)) {
        $numeri[] = $numero;
    }
}


?>

<ul>
    <li> 
        <?php
            echo '<pre>'; print_r($numeri); echo '</pre';
        ?>
    </li>
</ul>