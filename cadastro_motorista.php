<?php 

include_once("conexão.php");

$Nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_STRING);
$Data_nasc = filter_input(INPUT_POST, 'Data_nasc', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$Modelo = filter_input(INPUT_POST, 'Modelo', FILTER_SANITIZE_STRING);
$Status = filter_input(INPUT_POST,'status', FILTER_SANITIZE_STRING);
$Sexo = filter_input(INPUT_POST,'Sexo', FILTER_SANITIZE_STRING);


/*
echo "status: $Status <br>";
echo "Nome: $Nome <br>";
echo "Data de Nascimento: $Data_nasc <br>" ;
echo "CPF: $cpf <br>";
echo "Modelo do carro: $Modelo <br>";
)*/

$result_motorista = "INSERT INTO tb_motorista (nome, data_nasci, cpf, modelo_carro, status, sexo) VALUES ('$Nome', '$Data_nasc', '$cpf', '$Modelo', '$Status', '$Sexo')";

$resultado_motorista = mysqli_query($con, $result_motorista);

echo "Cadastrado com sucesso!";

echo "<script>location.href='index.php'</script>";



?>
