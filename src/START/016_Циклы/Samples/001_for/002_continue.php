<?php
// выведем все что кратно 2
  for ($i = 1; $i < 10; $i++) {
        if ($i % 2)
            continue;
        echo  $i.'<br>';
    }

?>