<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

        session_start();


        require_once "usuarios.php";

        if(isset($_POST['usuario']) && isset($_POST['senha'])){
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
            $_SESSION["usuario"] = $usuario;
            $_SESSION["senha"] = $senha;

        }else if(isset($_SESSION["usuario"]) && isset($_SESSION["senha"])){
            $usuario = $_SESSION["usuario"];
            $senha = $_SESSION["senha"];

        }else{
            $usuario = null;
            $senha = null;
        }
        
        if(!is_null($usuario) && !is_null($senha)){
            // echo $usuario . " -- " . $senha;

            if(verUsuarios($usuario, $senha)){
                echo "<br> - Fazendo Login";
                echo "<h2>Bem Vindo....</h2>";
            }else{
                echo "<br> - Tente Novamente";
                require_once "form.php";    
            }

        }else{
            require_once "form.php";
        }

    
    ?>


</body>
</html>