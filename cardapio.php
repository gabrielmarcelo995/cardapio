<?php

$quantidade1 = $_POST["quantidade1"];
$quantidade2 = $_POST["quantidade2"];
$quantidade3 = $_POST["quantidade3"];
$quantidade4 = $_POST["quantidade4"];
$quantidade5 = $_POST["quantidade5"];
$quantidade6 = $_POST["quantidade6"];
$obs = $_POST["obs"];
$valorTotal = 0.00;

if (isset($_POST['opcao1'])){
    $valorTotal +=  8.30 * $quantidade1;
}
if (isset($_POST['opcao2'])){
    $valorTotal +=   6.50 * $quantidade2;
}
if (isset($_POST['opcao3'])){
    $valorTotal += 6.00 * $quantidade3;
}
if (isset($_POST['opcao4'])){
    $valorTotal +=  5.00 * $quantidade4;
}
if (isset($_POST['opcao5'])){
    $valorTotal +=   6.50 * $quantidade5;
}
if (isset($_POST['opcao6'])){
    $valorTotal += 5.00 * $quantidade6;
}

echo "Pedido realizado com sucesso!<br>";
echo "Sua conta ficou em R$: ", $valorTotal;
echo "<br>Obs: ", $obs;
echo "<br><a href='cardapio.html'>Voltar</a>"

?>