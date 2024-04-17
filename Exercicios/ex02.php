<form method="get">
    <label>Digite a letra e diremos o sexo😈: </label>
    <input type="text" name="sexo">
    <br>
    <button type="submit">enviar</button>
</form>

<?php 

switch($_GET['sexo']){
    case "F": echo "F - feminino.";
    break;
    case "M": echo "M - masculino.";
    break;
    default: echo "Sexo inválido.";
    break;    
}

?>