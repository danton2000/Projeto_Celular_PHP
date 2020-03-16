<?php

include '../../lib/model/conexao.class.php'; //incluir o arquivo para usar a conexão com banco de dados
include '../../lib/model/crud.class.php';

if (isset($_POST['cadastrar'])) {

	$nome_cel = $_POST['nome_cel'];//name(do html)=[] //RECEBE O VALOR DO ATRIBUTO
	$sistema_cel = $_POST['sistema_cel'];
	$armazenamento_cel = $_POST['armazenamento_cel'];
	$tela_cel = $_POST['tela_cel'];
	$camera_cel= $_POST['camera_cel'];
	$memoria_cel= $_POST['memoria_cel'];
	$preco_cel= $_POST['preco_cel'];

	$celular = new Crud("tbcelular");
	$array_dados = array(
		"nome_cel" => $nome_cel,
		"sistema_cel" => $sistema_cel,
		"armazenamento_cel" => $armazenamento_cel,
		"tela_cel" => $tela_cel,
		"camera_cel" => $camera_cel,
		"memoria_cel" => $memoria_cel,
		"preco_cel" => $preco_cel
	);

	$resposta = $celular->insereCrud($array_dados); //precisa criar um array com os dados

	if($resposta){
		echo'
		<meta charset="utf-8">
		<link rel="stylesheet" href="../../lib/css/style.css">
		<link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
			<div class="container" id="tamanho_container">
				<center>
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<h3 id="topo_listar_h">Celular adicionado com Sucesso</h3>
				<div id="topo_listar">
					<a href="adicionar_celular.php" role="button" id="botao_cadastrar" class="btn btn-sm">Cadastrar novo SmartPhone</a><br><br>
					<a href="listar_celular.php" id="botao_listar" class="btn btn-sm">Ir para lista de SmartPhones</a>
				</center>
				</div>
			</div>
		';
	}else{
		echo ("location: adicionar_celular.php?erro=create");
	}
};
