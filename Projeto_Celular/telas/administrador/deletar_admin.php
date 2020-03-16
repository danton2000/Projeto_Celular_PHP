<?php
include '../../lib/bd/conexao.php';

$id_admin = $_GET['id_admin'];

$deletar = "DELETE FROM tb_admin where id_admin = $id_admin";
$fila = mysqli_query($conexao, $deletar);

header("location: listar_admin.php");//faz a ação e depois volta para tela APROVAR_admin.PHP//
	
?>