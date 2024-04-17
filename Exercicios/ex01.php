
<form method="get">
    <label>Digite o primeiro número: </label>
    <input type="text" name="numero1">
    <br>
    <label>Digite o segundo número: </label>
    <input type="text" name="numero2">
    <br>
    <button type="submit">enviar</button>
</form>

<?php 

echo "ja que aparentemente voce nao sabe diferenciar, esse é o maior numero blz: ";
if($_GET['numero1'] > $_GET['numero2']){
    echo $_GET['numero1'];
}else{
    echo $_GET['numero2'];
}

?>
