<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SMARTPHONE</h1>


    <?php
    
    require_once "aula12.php";
    
    $q = "SELECT s.cod AS cod_smart, s.nome AS nome_smart, e.nome AS emp_smart 
      FROM smartphone s 
      LEFT JOIN empresa e ON e.cod = s.empresa";
    // $q = "SELECT * FROM empresa";
    
    $busca = $banco->query($q);
    //var_dump($busca);

    // $obj_smartphone = $busca->fetch_object();
    // echo print_r($obj_smartphone);
    
    
    ?>

<table>
  <tr>
    <th>cod</th>
    <th>nome</th>
    <th>empresa</th>
  </tr>
  <tr>
   <?php
   while($obj_smartphone = $busca->fetch_object()){
     echo "<tr>";
     echo "<td>".$obj_smartphone->cod_smart."</td>";
     echo "<td>".$obj_smartphone->nome_smart."</td>";
     echo "<td>".$obj_smartphone->emp_smart."</td>";
     echo "<td><a href=\"editar.php?p=" . $obj_smartphone->cod_smart."\" target='_blank'>editar</a></td>";
     echo "<\tr>";
    }
    ?>
  </tr>
</table>
</body>
</html>