
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

include 'funcoes.php';


    echo '<div class="card">';
        echo '<div class="form-group">';
            echo '<form method="get">';
                
            echo '<br><label>Nome: </label>';
            echo '<input class="form-control" type=text name="nome">';

            echo '<br><label>Email: </label>';
            echo '<input class="form-control"  type=text name="email">';

            echo '<br><label>Senha: </label>';
            echo '<input class="form-control"  type=text name="senha">';

            echo '<br><input class="btn btn-primary" type=submit name="Enviar">';
            echo '</form>';
        echo '</div>';
    echo '</div>';



if ($_SERVER["REQUEST_METHOD"] == "GET") {

    if (isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['senha'])) {

    $nome_valido = validar_nome_usuario($_GET['nome']);
    $email_valido = validar_email($_GET['email']);
    $senha_valida = validar_senha($_GET['senha']);  
    $campos_com_erro = array();
    
    if (!$nome_valido || !$email_valido || !$senha_valida) {

        
        if (!$nome_valido) {
            $campos_com_erro[] = "nome";
        }
        if (!$email_valido) {
            $campos_com_erro[] = "email";
        }
        if (!$senha_valida) {
            $campos_com_erro[] = "senha";
        }
        
        $parametros = http_build_query(array('campos' => $campos_com_erro));
        header("Location: erro.php?$parametros");
        exit;
    }else{
        header("Location: sucesso.php");
        exit;
    }

}
}

?>