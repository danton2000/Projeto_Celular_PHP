<?php 

include '../../lib/bd/conexao.php';

$id_admin = $_POST['id_admin'];
//$nro_celular = $_POST['nro_celular'];
$nome_admin = $_POST['nome_admin'];
$email_admin = $_POST['email_admin'];
$nivel_admin = $_POST['nivel_admin'];


$sql = "UPDATE `tb_admin` SET `nome_admin`='$nome_admin',`email_admin`='$email_admin',`nivel_admin`=$nivel_admin WHERE id_admin = $id_admin";

$atualizar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="../../lib/css/style.css">
<link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
<div class="container" id="tamanho_container">
	<center>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<h3 id="topo_listar_h">Usuário Atualizado com Sucesso!</h3>
	<div id="topo_listar">
		<a href="listar_admin.php" id="botao_listar" class="btn btn-sm ">Voltar para Listas de Usuários</a>
	</div>
	</center>
</div>

