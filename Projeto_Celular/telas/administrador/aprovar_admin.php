<?php
include '../../lib/bd/conexao.php';

$id_admin = $_GET['id_admin'];
$nivel_admin = $_GET['nivel_admin'];


if ($nivel_admin == 1){

	$update = "UPDATE tb_admin SET status= 'Ativo', nivel_admin = 1 WHERE id_admin = $id_admin";
	$atualizacao = mysqli_query($conexao, $update);
	echo "ADMINISTRADOR APROVADO";
}

if ($nivel_admin == 2){

	$update = "UPDATE tb_admin SET status= 'Ativo', nivel_admin = 2 WHERE id_admin = $id_admin";
	$atualizacao = mysqli_query($conexao, $update);
	echo "FUNCIONARIO APROVADO";
}

if ($nivel_admin == 3){

	$update = "UPDATE tb_admin SET status= 'Ativo', nivel_admin = 3 WHERE id_admin = $id_admin";
	$atualizacao = mysqli_query($conexao, $update);
	echo "CONFERENTE APROVADO";
}

header("location: listar_admin_inativo.php");
?>