<?php
include_once("../../lib/model/crud.class.php");

$id_contato = $_GET['id_contato'];

if(isset($id_contato)){
	$contato = new Crud("tbcontatos");
	$filtro = array(
		"id_contato" => $id_contato
	);
	$resposta = $contato->selectCrud("*", true, $filtro);
	// echo "<pre>";
	// print_r($resposta);
	// echo "</pre>";
	$id_contato = $resposta[0]->id_contato;

	if (isset($id_contato)){
		$resposta = $contato->excluiCrud($filtro);
		if($resposta){
            header("location: listar_admin_contatos.php");
        }else{
			header("Location:listar_admin_contatos.php?delete=erro");
		}
		
	}
}

?>