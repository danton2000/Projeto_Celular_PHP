<?php
include_once("../../lib/model/crud.class.php");

$id_adm = "";
$nome_adm = "";
$login_adm = "";
$senha_adm = "";
$id_adm_get = $_GET['id_adm'];

if (isset($id_adm_get)) {
	$admin = new Crud("tbadmin");
	$filtro = array(
		"id_adm" => $id_adm_get
	);

	$resposta = $admin->selectCrud("*", true, $filtro);
	$id_adm = $resposta[0]->id_adm;
	$nome_adm = $resposta[0]->nome_adm;
    $login_adm = $resposta[0]->login_adm;
    $senha_adm = $resposta[0]->senha_adm;

}

?>

<!DOCTYPE html><!--shift + alt + 2 = dividir tela, 1 fecha a tela -->
<html>
<head>
	<meta charset="utf-8">
	<title>Editar admin</title>
	<link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../lib/css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>	<!--container = espaçamento -->	<!--id = identificação. #=css -->
<div class="container" id="telas_cadastro_admin">
        <div id="botao_direita">
            <a href="listar_admin.php" role="button" id="botao_voltar_admin" class="btn btn-sm">Voltar</a>
        </div>

        <h4>Editar de Administradores</h4>
        <form action="atualizar_admin.php" method="post">
            <!--POST = inserir dados -->
            <div class="row">
                <div class="col-md-5 form-group">
                    <label>Nome do Administrador</label>
                    <input type="number" class="form-control" name="id_adm" value="<?php echo $id_adm ?>" style="display: none">
                <input type="text" name="nome_adm" placeholder="Digite o seu nome completo" class="form-control" value="<?php echo $nome_adm ?>" required autocomplete="off">
                </div> 
                <div class="col-md-5 form-group">
                    <label>Login do Administrador</label>
                    <input type="text" name="login_adm" placeholder="Digite o seu login" class="form-control" value="<?php echo $login_adm ?>" required autocomplete="off">
                </div>
                <div class="col-md-5 form-group">
                    <label>Senha do Administrador</label>
                    <input type="password" name="senha_adm" placeholder="Digite a sua senha" class="form-control" value="<?php echo $senha_adm ?>" required autocomplete="off">
                </div>

                <div id="botao_direita">
                    <button type="submit" name="editar" id="botao_cadastrar_admin" class="btn btn-sm">Editar</button>
                </div>
             </div>
        </form>
    </div>

<!--<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>