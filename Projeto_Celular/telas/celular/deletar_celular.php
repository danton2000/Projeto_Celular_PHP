<?php 
include_once("../../lib/model/crud.class.php");
// $id = $_GET['id'];
// $sql = "DELETE FROM `tb_celular` WHERE id_celular = $id";
// $deletar = mysqli_query($conexao, $sql);

$id_cel = $_GET['id_cel'];


if(isset($id_cel)){
	$celular = new Crud("tbcelular");
	$filtro = array(
		"id_cel" => $id_cel
	);
	$resposta = $celular->selectCrud("*", true, $filtro);
	// echo "<pre>";
	// print_r($resposta);
	// echo "</pre>";
	$id_cel = $resposta[0]->id_cel;

	if (isset($id_cel)){
		$resposta = $celular->excluiCrud($filtro);
		if($resposta){
			echo '
			<link rel="stylesheet" href="../../lib/css/style.css">
			<link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
			<div class="container" id="telas_atualizacao">
				<center>
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<h3 id="topo_listar_h">SmartPhone Deletado com Sucesso!</h3>
					<div id="topo_listar">
						<a href="listar_celular.php" id="botao_voltar_listar" class="btn btn-sm">Voltar para Listas de celulars</a>
					</div>
				</center>
			</div>
			';
		}else{
			header("Location: deletar_celular.php?delete=erro");
		}
		
	}
}
?>

