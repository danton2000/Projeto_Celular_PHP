<?php
include_once("../../lib/model/crud.class.php");

$id_adm = $_GET['id_adm'];

if(isset($id_adm)){
	$admin = new Crud("tbadmin");
	$filtro = array(
		"id_adm" => $id_adm
	);
	$resposta = $admin->selectCrud("*", true, $filtro);
	// echo "<pre>";
	// print_r($resposta);
	// echo "</pre>";
	$id_adm = $resposta[0]->id_adm;

	if (isset($id_adm)){
		$resposta = $admin->excluiCrud($filtro);
		if($resposta){
            header("location: listar_admin.php");
        }else{
			header("Location:listar_admin.php?delete=erro");
		}
		
	}
}

?>