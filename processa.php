<?php


include_once ("conexão.php");
$id = mysqli_real_escape_string($con,$_POST['id_m']);
$status = mysqli_real_escape_string($con, $_POST['status']);


//echo "status: $status <br> id: $id <br>";

$result_status = "UPDATE tb_motorista SET status ='$status' WHERE id_motoristas = '$id'";
$resultado_status = mysqli_query($con,$result_status);

echo "<script>location.href='contato.php'</script>";