<?php


function validar_nome_usuario($nome){

    if(temApenasLetrasENumeros($nome)){
        return true;
    }

    return false;

}

function validar_email($email){

    if(str_contains($email, '@gmail.com') || str_contains($email, '@hotmail.com')){
        return true;
    }

    return false;
}

function validar_senha($senha){

    if(strlen($senha) >= 6){
        return true;
    }

    return false;
}

function temApenasLetrasENumeros($str) {
  
    return preg_match('/^[a-zA-Z0-9\s]+$/', $str);
}

?>

