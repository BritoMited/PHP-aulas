<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste Salarial</title>
    <style>
        td, th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Reajuste Salarial</h1>

    <form method="get">
        <label for="salario">Informe o salário do colaborador:</label>
        <input type="text" name="salario" id="salario">
        <br>
        <button type="submit">Enviar</button>
    </form>

        <?php

                    $salario = $_GET['salario'];

                    if($salario <= 280){

                        $salario *= 1.2;

                    }else if($salario > 280 && $salario < 700){

                        $salario *= 1.15;

                    }else if($salario >= 700 && $salario < 1500){

                        $salario *= 1.1;

                    }else if($salario >= 1500){

                        $salario *= 1.05;

                    }
        ?>

    <h2>Resultado do Reajuste</h2>

    <table>
        <tr>
            <th>Salário Antes</th>
            <th>Percentual Aplicado</th>
            <th>Valor do Aumento</th>
            <th>Novo Salário</th>
        </tr>
        <tr>
            <td>R$ <?php echo $_GET['salario']; ?></td>
            <td><?php echo ($salario / $_GET['salario'] -1) * 100; ?>%</td>
            <td>R$ <?php echo $salario - $_GET['salario']; ?></td>
            <td>R$ <?php echo $salario; ?></td>
        </tr>
    </table>
</body>
</html>

