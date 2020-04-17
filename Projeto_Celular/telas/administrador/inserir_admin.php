<?php
	include '../../lib/model/conexao.class.php'; //incluir o arquivo para usar a conexão com banco de dados
	include '../../lib/model/crud.class.php';
	
	if (isset($_POST['cadastrar'])) {
	
		$nome_adm = $_POST['nome_adm'];//name(do html)=[] //RECEBE O VALOR DO ATRIBUTO
		$login_adm = $_POST['login_adm'];
		$senha_adm = hash("sha256",$_POST['senha_adm']);
	
		$admin = new Crud("tbadmin");
		$array_dados = array(
			"nome_adm" => $nome_adm,
			"login_adm" => $login_adm,
			"senha_adm" => $senha_adm,
		);
	
		$resposta = $admin->insereCrud($array_dados); //precisa criar um array com os dados

		echo '
		<meta charset="utf-8">
		<link rel="stylesheet" href="../../lib/css/style.css">
		<link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
			<div class="container" id="telas_inserir">
				<center>
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<h3 id="topo_listar_h">Administrador adicionado com Sucesso</h3>
				<div id="topo_listar">
					<a href="cadastro_admin.php" role="button" id="btn_cadastrar_novo" class="btn btn-sm">Cadastrar novo Administrador</a><br><br>
					<a href="listar_admin.php" id="btn_listar" class="btn btn-sm">Ir para lista de Administradores</a>
				</center>
				</div>
			</div>
		';

	};
?>

