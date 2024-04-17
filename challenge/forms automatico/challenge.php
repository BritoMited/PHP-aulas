

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
            margin: 40px;
            background-color: grey;
        }
        div{
            margin: 20px;
        }
    </style>
</head>
<body>
    
</body>
</html>

<?php

function formulario($metodo, ...$campos){ 
    
    echo '<div class="card">';
        echo "<form method=$metodo>";
            echo '<div class="form-group">';
        
            foreach($campos as $n)  { 
                echo "<label> " . ucfirst($n) .": </label>";
                echo "<input class='form-control' type=text name='$n'>";
                echo "<br>";

            }
            
            echo "<br>";
            echo '<button class="btn btn-primary" type="submit">Enviar</button>';
    echo '</div>';
   echo '</div>';

    echo "</form>";


}


formulario("get" ,"nome", "telefone", "sobrenome", "davyjonges");



?>