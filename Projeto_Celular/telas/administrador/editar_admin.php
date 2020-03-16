<?php
include '../../lib/bd/conexao.php';

$id_admin = $_GET['id_admin'];//pegando o id e mostrando na tela.

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
<div class="container" id="tamanho_container"><!-- distancia do topo de:40px -->
	<div id="botao_direita">
      <a href="listar_admin.php" role="button" id="botao_voltar" class="btn btn-sm">Voltar</a>
  </div>    
	<h4>Formulário de Edição de Usuários</h4>
	
	<form id="espaçamento" action="atualizar_admin.php" method="POST"><!-- Enviar uma informação = POST,Pegar um valor = GET --> <!--distancia de 20px do form -->

	<?php 

		$sql = "SELECT * FROM `tb_admin` WHERE id_admin = $id_admin";
		$buscar  = mysqli_query($conexao,$sql);
		while ($array = mysqli_fetch_array($buscar)) {

		$id_admin = $array['id_admin'];
    	$nome_admin = $array['nome_admin'];
    	$email_admin = $array['email_admin'];
    	$nivel_admin = $array['nivel_admin'];
  ?>

		<div class="form-group">
			<label>ID do Usuário</label>
			<input type="number" class="form-control" name="id_admin"  readonly value="<?php echo $id_admin ?>"><!-- readonly = envia o valor para o formulário e também não pode editar. -->
		</div>

		<div class="form-group">
			<label>Nome do Usuário</label>
			<input type="text" class="form-control" name="nome_admin" value="<?php echo $nome_admin ?>"   autocomplete="off"><!--required = não pode ser em branco --> <!-- autocomplete="off" = não salva os nomes -->
		</div>

		<div class="form-group">
			<label>Email do Usuário</label>
			<input type="email" class="form-control" name="email_admin" value="<?php echo $email_admin ?>">
		</div>

		<div class="form-group">
			<label>Nivel</label>
			<select class="form-control" name="nivel_admin"required>
				<option value="1">Administrador</option>
				<option value="2">Funcionário</option>
				<option value="3">Conferente</option>
			</select>
		</div>

  		<!-- DEIXANDO O BOTÃO NO LADO DIREITO -->
  		<div id="botao_direita">
  			<button type="submit" id="botao_editar" class="btn btn-sm">Salvar Edição</button><!--submit = enviar as informações -->
  		</div>
  	<?php } ?>
  	</form>
</div>

<!--<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>