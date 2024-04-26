<?php 
    $palavra = "vagabundo é foda ne lek";

    echo $palavra;
    echo "<br>";

    $conta = 0;

    for ($i = 0; $i < strlen($palavra); $i++) { 
        $caracter = $palavra[$i];
        if(strpos('aeiou ', $caracter) === false){
            $conta++;
        } 

    }

    echo "<br>";
    echo "quantidade de consoantes: " . $conta;

?>