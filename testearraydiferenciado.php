<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Bonificação</h2>

    <p>Selecione sua posição :</p>

    <form method="POST">
        <label>Digite seu salário : </label>
        <input type="text" id="salario" name="salario" value=""><br>
        <input type="radio" id="diretor" name="posicao" value="diretor">
        <label for="diretor">diretor</label><br>
        <input type="radio" id="funcionario" name="posicao" value="funcionario">
        <label for="funcionario">funcionario</label><br>
        <input type="radio" id="estagiário" name="posicao" value="estagiário">
        <label for="estagiário">estagiário</label><br><br>
        <input type="submit" value="Enviar">
    </form>

</body>

</html>


<?php

if($_POST){
    $salario = $_POST['salario'];
    $posicao = $_POST['posicao'];
    $bonificacao = [
        "diretor" => 20,
        "funcionario" => 10,
        "estagiário" => 5,
    ];
    
    function calcularbonus($salario, $bonificacao ,$posicao){

        $passoum = $salario/100;
        $passodois = $passoum*$bonificacao[$posicao];

        $bonificacaoresultado = $salario+$passodois;

        return "O salário mais a bonficação do " . $posicao . " é de : " .$bonificacaoresultado;

    }

    echo calcularbonus($salario, $bonificacao,$posicao);

}

?>