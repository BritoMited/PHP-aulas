<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

        $cod = $_GET["p"] ?? null;

        if(is_null($cod)){
            echo "nenhum produto para editar";
            return;
        }

        require_once "aula12.php";


        if(is_null($nome) || is_null($empresa)){
        $q = "SELECT nome, empresa from smartphone where cod='$cod'";
        $busca = $banco->query($q);
        $obj_smartphone = $busca->fetch_object();
        $nome = $obj_smartphone->nome;
        $empresa = $obj_smartphone->empresa;
        }else{
            UpdateOnDB("smartphone", "nome='$nome', empresa='$empresa'", "cod='$cod'");
        }

?>
    <form method="post">

        <label>cod:</label>
        <input type="text" name="cod" value="<?= $cod?>" disabled>
        <br>
        <label>nome:</label>
        <input type="text" name="nome" value="<?= $nome?>">
        <br>
        <label>empresa:</label>
        <input type="text" name="empresa" value="<?= $empresa ?>">
        <br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>