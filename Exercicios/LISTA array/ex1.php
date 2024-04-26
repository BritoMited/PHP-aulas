<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICIO 1</title>
</head>
<body>
    <?php 

        $listaDeCompras = array("batatinha palha", "gumelo", "bifao", "creme de leite", "ketchup");
        echo print_r($listaDeCompras);

        echo "<h3>lista de compra</h3>";

        echo "<ul>";

        foreach ($listaDeCompras as $ls) {
            echo "<li>" . $ls . "</li>";
        }

        echo "</ul>";
    
    ?>
</body>
</html>