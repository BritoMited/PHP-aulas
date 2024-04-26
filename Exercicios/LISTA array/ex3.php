<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
       
        input{
            width: 100px;
        }
    </style>
</head>
<body>
    <center class="centro"> 
        <form method="get">
            <label>Nota 1: </label>
            <input type="text" name="nota1">
            <br>
            <label>Nota 2: </label>
            <input type="text" name="nota2">
            <br>
            <label>Nota 3: </label>
            <input type="text" name="nota3">
            <br>
            <label>Nota 4: </label>
            <input type="text" name="nota4">
            <br>
            <input type="submit">
        
        </form>

        <?php

            
         $notas = array($_GET['nota1'],$_GET['nota2'],$_GET['nota3'],$_GET['nota4']);
         $media = 0;

         echo "Notas: ";
         
         foreach ($notas as $n) {
           echo " ". $n;
         }

         foreach ($notas as $n) {
            $media += $n;
          }

         echo "<br>";
         echo "Média: ";
         echo $media = $media / count($notas);

        ?>

        
    </center>
</body>
</html>