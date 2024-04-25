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
            
            <label>Até que valor o fibonacci irá? </label>
            <input type="text" name="numero1" id="">
            
            <input type="submit">
            
        </form>
        
    </div>
    <br>
    <br>

        <?php
            $num1 = isset($_GET['numero1']) ? $_GET['numero1'] : 0;
            
            $anterior = 0;
            $aux = 0;
            $atual = 1;

            for ($i = 0; $i <= $num1; $i++) { 
               echo $anterior . " ";
               
               $aux = $anterior;
               $anterior = $atual;
               $atual += $aux; 

            }
        
        ?>
</body>
</html>