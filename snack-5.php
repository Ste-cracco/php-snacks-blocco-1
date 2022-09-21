<?php

$frase = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate perferendis qui non consectetur. Assumenda dicta, illum quos molestiae nobis placeat.
Laborum quisquam rerum id quis exercitationem, ab, dignissimos, veniam asperiores pariatur voluptas corrupti perferendis labore incidunt totam nam? Quam, et!
Itaque, laboriosam consequatur dolores corporis eum dicta nihil neque placeat facere voluptas nisi aliquam at eius magnam temporibus ipsam ad' ;

$frase_corta = explode('.', $frase);

?>

<ul>
    <span>
        <h5>
            Frase Completa:
            <?php
            echo $frase
            ?>
        </h5>
</span>
    <?php 
    for ($i = 0; $i < count($frase_corta); $i++) {
        ?>
        <li>
            <?php
               echo $frase_corta[$i];
            ?>
        </li>
        <?php
    }
    ?>
</ul>


