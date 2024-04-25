<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICIO 3</title>
    <style>
        .container{
            border-style: solid;
            border-radius: 10px;
            border-color: black;
            padding-bottom: 20px;
            padding-left: 20px;
        }
        
    </style>
</head>
<body>
    <div class="container">

        <h2>Digite o intervalo de numeros que voce quer que seja apresentado</h2>
        <form method="get">
            
            <label>Numero 1: </label>
            <input type="text" name="numero1" id="">
            <label>Numero 2: </label>
            <input type="text" name="numero2" id="">
            <input type="submit">
            
        </form>
        
    </div>
    <br>
    <br>

        <?php
            $num1 = isset($_GET['numero1']) ? $_GET['numero1'] : 0;
            $num2 = isset($_GET['numero2']) ? $_GET['numero2'] : 0;
    
            $soma = 0;
            for ($i = $num1 + 1; $i < $num2; $i++) { 
                echo $i . " ";
                $soma += $i;
            }

            echo "<br>Total: " . $soma;
        
        
        ?>
</body>
</html>