<?php 

include_once("conexão.php");



$Nome_m = filter_input(INPUT_POST, 'motorista', FILTER_SANITIZE_STRING);
$Nome_p = filter_input(INPUT_POST,'passageiro', FILTER_SANITIZE_STRING);
$Valor = filter_input(INPUT_POST,'valor', FILTER_SANITIZE_STRING);



/*
echo "Nome Motorista: $Nome_m <br>";
echo "Nome Passageiro: $Nome_p <br>";
echo "Valor: $Valor <br>" ;
echo "CPF: $cpf <br>";
echo "Modelo do carro: $Modelo <br>";
)*/

$result_corrida = "INSERT INTO tb_corridas (nome_motorista, nome_passageiro, valor_corrida) VALUES ( '$Nome_m', '$Nome_p', '$Valor')";

$resultado_corrida = mysqli_query($con, $result_corrida);

echo "Cadastrado com sucesso!";

echo "<script>location.href='index.php'</script>";