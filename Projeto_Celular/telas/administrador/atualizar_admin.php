<?php 

include_once("../../lib/model/crud.class.php");

if (isset($_POST['editar'])){
	
	$admin = new Crud("tbadmin");
	$array_dados = array(
		"nome_adm" => $_POST['nome_adm'],
		"login_adm" =>  $_POST['login_adm'],
		"senha_adm" =>  hash("sha256", $_POST['senha_adm']),
	);

	$array_id = array(
		"id_adm" =>  $_POST['id_adm'],
	);

	$resposta = $admin->atualizaCrud($array_dados, $array_id);
	if($resposta){
		echo'<link rel="stylesheet" href="../../lib/css/style.css">
		<link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
		<div class="container" id="telas_atualizacao">
			<center>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<h3 id="topo_listar_h">Administrador Atulizado com Sucesso!</h3>
			<div id="topo_listar">
				<a href="listar_admin.php" id="botao_voltar_listar" class="btn btn-sm ">Voltar para Listas de Administradores</a>
			</div>
			</center>
		</div>';
	}
	else{
		header("Location: atualizar_admin.php?update=erro");
	}
			
}
?>



