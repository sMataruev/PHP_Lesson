<?php
//for

 for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

echo '<br>';
/* пример 2 */

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}


echo '<br>';
/* пример 3 */

$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}


?>