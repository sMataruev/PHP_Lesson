<?php
    $i = 1;
    while ($i <= 10) {
        echo $i++;  /* выводится будет значение переменной
                       $i перед её увеличением
                       (post-increment) */
    }

    /* пример 2 */

    $i = 1;
    while ($i <= 10):
        echo $i;
        $i++;
    endwhile;

?>