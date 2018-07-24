<?php 

include_once("conexão.php");

$Nome = filter_input(INPUT_POST, 'Nome2', FILTER_SANITIZE_STRING);
$Data_nasc = filter_input(INPUT_POST, 'Data_nasc2', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf2', FILTER_SANITIZE_STRING);
$Sexo = filter_input(INPUT_POST,'Sexo2', FILTER_SANITIZE_STRING);


/*
echo "Nome: $Nome <br>";
echo "Data de Nascimento: $Data_nasc <br>" ;
echo "CPF: $cpf <br>";
)*/

$result_passageiro = "INSERT INTO tb_passageiro (nome_p, data_p, cpf_p, sexo_p) VALUES ('$Nome', '$Data_nasc', '$cpf','$Sexo')";

$resultado_passageiro = mysqli_query($con, $result_passageiro);


echo "Cadastrado com sucesso!";

echo "<script>location.href='index.php'</script>";