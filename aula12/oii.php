<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANCO DO BRASIL</title>
</head>
<body>
    
    <?php
    
    require_once "banco.php";

    $usu = $_POST['usuario'] ?? null;
    $sen = $_POST['senha'] ?? null;
    
    if(is_null($usu) || is_null($sen)){
        require_once "form-login.php";
    }else{
        require_once "form-login.php";
        echo "~[Usuario: $usu - Senha: $sen] ~";

        $busca = buscarUsuario($usu);
        // $obj = $busca->fetch_object();
        echo var_dump($busca);

        if($busca->num_rows == 0){
            echo "<br>nao existe";
        }else{
            echo "<br>boa";
            $obj = $busca->fetch_object();
            echo "<br>".$obj->usu;
            echo "<br>".$obj->nome;

            if(password_verify($sen, $obj->senha)){
                echo "<br>entro";
            }else{
                echo "<br>nao sucesso";
            }
        }
        
    }
    // echo password_hash("123", PASSWORD_DEFAULT) e muda a senha no banco
    ?>


</body>
</html>