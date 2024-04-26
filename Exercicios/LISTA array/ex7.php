<?php 

    $vetor = array(5,4,3,2,1);
    $multi = 1;
    $soma = 0;

    for ($i=0; $i < count($vetor); $i++) { 
       $multi *= $vetor[$i];
       $soma += $vetor[$i];
    }

    echo "Soma: " . $soma;
    echo "<br>";
    echo "Multiplicação: " . $multi;

?>