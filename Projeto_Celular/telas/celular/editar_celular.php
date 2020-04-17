<?php
include '../../lib/model/crud.class.php';

$id_cel = "";
$nome_cel = "";
$sistema_cel = "";
$armazenamento_cel = "";
$tela_cel = "";
$camera_cel = "";
$memoria_cel = "";
$preco_cel = "";
$id_celular_get = $_GET['id_cel'];

if (isset($id_celular_get)) {
	$celular = new Crud("tbcelular");
	$filtro = array(
		"id_cel" => $id_celular_get
	);

	$resposta = $celular->selectCrud("*", true, $filtro);
	$id_cel = $resposta[0]->id_cel;
	$sistema_cel = $resposta[0]->sistema_cel;
	$nome_cel = $resposta[0]->nome_cel;
	$armazenamento_cel = $resposta[0]->armazenamento_cel;
	$tela_cel = $resposta[0]->tela_cel;
	$camera_cel = $resposta[0]->camera_cel;
	$memoria_cel = $resposta[0]->memoria_cel;
	$preco_cel = $resposta[0]->preco_cel;
}

?>

<!DOCTYPE html>
<!--shift + alt + 2 = dividir tela, 1 fecha a tela -->
<html>

<head>
	<meta charset="utf-8">
	<title>Editar SmarthPhones</title>
	<link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../lib/css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<!--container = espaçamento -->
	<!--id = identificação. #=css -->
	<div class="container" id="telas_editar">
		<!-- distancia do topo de:40px -->
		<div id="botao_direita">
			<a href="listar_celular.php" role="button" id="botao_voltar" class="btn btn-sm">Voltar</a>
		</div>
		<h4>Formulário de Edição de SmartPhone</h4>

		<form action="atualizar_celular.php" method="POST">
			<!-- Enviar uma informação = POST,Pegar um valor = GET -->
			<!--distancia de 20px do form -->
			
			<div class="row">
				<div class="col-md-5 form-group">
					<label>Nome do SmartPhone</label>
					<input type="number" class="form-control" name="id_cel" value="<?php echo $id_cel ?>" style="display: none">
					<input type="text" class="form-control" name="nome_cel" value="<?php echo $nome_cel ?>" placeholder="Insira o numero do celular" required autocomplete="off">
					<!--required = não pode ser em branco -->
					<!-- autocomplete="off" = não salva os nomes -->
				</div>

				<div class="col-md-5 form-group">
					<label>Sistema Operacional do SmartPhone</label>
					<select class="form-control" name="sistema_cel" required>
						<option>Android</option>
						<option>iOS</option>
					</select>
				</div>

				<div class="col-md-5 form-group">
					<label>Espaço de Armazenamento</label>
					<select class="form-control" name="armazenamento_cel" required>
						<option>8 GB</option>
						<option>16 GB</option>
						<option>32 GB</option>
						<option>64 GB</option>
						<option>128 GB</option>
						<option>256 GB</option>
						<option>512 GB</option>
						<option>1 TB</option>
					</select>

				</div>

				<div class="col-md-5 form-group">
					<label>Tamanho da Tela do SmartPhone</label>
					<select class="form-control" name="tela_cel" required>
						<option>5 Pol</option>
						<option>6 Pol</option>
						<option>7 Pol</option>
					</select>

				</div>

				<div class="col-md-5 form-group">
					<label>Qualidade da Camera do SmartPhone</label>
					<select class="form-control" name="camera_cel" required>
						<option>8 MP</option>
						<option>12 MP</option>
						<option>13 MP</option>
						<option>16 MP</option>
						<option>20 MP</option>
					</select>
				</div>

				<div class="col-md-5 form-group">
					<label>Qualidade da Memória do SmartPhone</label>
					<select class="form-control" name="memoria_cel" required>
						<option>1 GB</option>
						<option>2 GB</option>
						<option>3 GB</option>
						<option>4 GB</option>
						<option>6 GB</option>
						<option>8 GB</option>
						<option>12 GB</option>
					</select>
				</div>

				<div class="col-md-5 form-group">
					<label>Preço do SmarthPhone</label>
					<input type="number" class="form-control" name="preco_cel" value="<?php echo $preco_cel; ?>" placeholder="Insira o Preço do SmartPhone" required autocomplete="off">
					<!--required = não pode ser em branco -->
					<!-- autocomplete="off" = não salva os nomes -->
				</div>
			</div>	
			<!-- DEIXANDO O BOTÃO NO LADO DIREITO -->
			<div id="botao_direita">
				<button type="submit" name="editar" id="botao_editar" class="btn btn-sm">Editar</button>
				<!--submit = enviar as informações -->
			</div>
		</form>
	</div>

	<!--<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>