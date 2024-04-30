<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $pessoas = [
        ["idade" => 10, "altura" => 1.70],
        ["idade" => 11, "altura" => 1.71],
        ["idade" => 12, "altura" => 1.72],
        ["idade" => 13, "altura" => 1.73],
        ["idade" => 14, "altura" => 1.74]
    ];

    for ($i = count($pessoas) -1; $i >= 0 ; $i--) { 
        echo $pessoas[$i]["altura"];
        echo " ";
        echo $pessoas[$i]["idade"];
        echo "<br>";
    }
    
    ?>
</body>
</html>