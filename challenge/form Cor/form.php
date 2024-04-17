<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <style>
       body{
        margin-left: 40px;
       }
    </style>
</head>
<body>

  <form method="post">
        <div class="form-group">
            <label for="cor">Selecione uma cor:</label>
            <br>
            <input class="form-check-input" type="radio" id="cor" name="cor" value="red">
            <label class="form-check-label" for="red">red</label>
            <br>
            <input class="form-check-input" type="radio" id="cor" name="cor" value="black">
            <label class="form-check-label" for="black">black</label>
            <br>
            <input class="form-check-input" type="radio" id="cor" name="cor" value="blue">
            <label class="form-check-label" for="blue">blue</label>
            <br>
            <input class="form-check-input" type="radio" id="cor" name="cor" value="orange">
            <label class="form-check-label" for="orange">orange</label>
            <br>
            <button type="submit">Alterar Cor</button>
        </div>
    </form>

<?php
  
    echo "<style>body { background-color: $_POST[cor]; }</style>";
    
?>
    
</body>
</html>
  

