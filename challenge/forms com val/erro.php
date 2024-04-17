<?php

$campos_com_erro = $_GET['campos'];

echo "<h1>Erro maximo</h1>";

foreach ($campos_com_erro as $campo) {
    echo $campo . "<br>";
}

?>
