<pre>
<?php

    
    $banco = new  mysqli("localhost:3307", "root", "", "jeanbd");

    function buscarUsuario($usuario){
        global $banco;
        $q = "SELECT usu, nome, senha FROM usuarios WHERE usu = '$usuario'";

        $busca = $banco->query($q);

        return $busca;
    }
    // $senhaNova = password_hash("SENHA", PASSWORD_DEFAULT);
    // $q = "UPDATE usuarios SET senha='$senhaNova' WHERE usu='pedroca'";
    // $resp = $banco->query($q);
    // echo "query: $q";
    // echo var_dump($resp);

    // $q = "DELETE FROM usuarios WHERE usu='pedroca'";
    // $resp = $banco->query($q);
    // echo "query: $q";
    // echo var_dump($resp);

    function criarUsuario($usu, $nome, $sen){
        global $banco;

        $senha = password_hash($sen, PASSWORD_DEFAULT);
        
        //criarNoDB("usuarios(id, nome, usu, senha)", "(NULL, '$usu', '$nome', '$senha')")

        $q = "INSERT INTO usuarios(id, nome, usu, senha) 
        VALUES (NULL, '$usu', '$nome', '$senha')";
        $resp = $banco->query($q);
        echo "query: $q";
        echo var_dump($resp);
    }

    function criarNoDB($into, $values){
        global $banco;
        $q = "INSERT INTO $into VALUES $values";
        $resp = $banco->query($q);
        echo "query: $q";
        echo var_dump($resp);
    }
   


    // $busca = $banco->query("SELECT * FROM usuario");
    // echo var_dump($busca);

    // // $obj = $busca->fetch_object();
    // // echo var_dump($obj);

    // echo "<br>----------------------------<br>";

    // // while($obj = $busca->fetch_object()){
    // //     echo var_dump($obj);
    // // }

    // echo "<br>----------------------------<br>";

    // $obj = $busca->fetch_object();
    // echo "<br>" . $obj->usuario;
    // echo "<br>" . $obj->nome;
    // echo "<br>" . $obj->senha;
    
    

?>
</pre>