
<?php

    $num = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
    
    foreach ($num as $n) {
        echo " " . $n;
    }

    $reverse = array_reverse($num);

    echo "<br>";

    foreach ($reverse as $r) {
        echo " " . $r;
    }


?>