<?php 

include_once("../../lib/model/crud.class.php");

if (isset($_POST['editar'])){
	
	$celular = new Crud("tbcelular");
	$array_dados = array(
		"nome_cel" => $_POST['nome_cel'],
		"sistema_cel" =>  $_POST['sistema_cel'],
		"armazenamento_cel" =>  $_POST['armazenamento_cel'],
		"tela_cel" =>  $_POST['tela_cel'],
		"camera_cel" =>  $_POST['camera_cel'],
		"memoria_cel" =>  $_POST['memoria_cel'],
		"preco_cel" =>  $_POST['preco_cel']
	);

	$array_id = array(
		"id_cel" =>  $_POST['id_cel'],
	);

	// echo"<pre>";
	// print_r($array_id);
	// echo"</pre>";

	// echo"<pre>";
	// print_r($array_id);
	// echo"</pre>";

	$resposta = $celular->atualizaCrud($array_dados, $array_id);
	if($resposta){
		echo'<link rel="stylesheet" href="../../lib/css/style.css">
		<link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
		<div class="container" id="telas_atualizacao">
			<center>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<h3 id="topo_listar_h">SmartPhone Atulizado com Sucesso!</h3>
			<div id="topo_listar">
				<a href="listar_celular.php" id="botao_voltar_listar" class="btn btn-sm ">Voltar para Listas de celulars</a>
			</div>
			</center>
		</div>';
	}
	else{
		header("Location: atualizar_celular.php?update=erro");
	}
			
}
?>



