<?php  

include '../bd/conexao.php';//Pegando a conexão com BD
include '../script/password.php';

$login_admin = $_POST['login_admin'];//guardando os valores dos campos e colocando em variaveis $.
$senha_login = $_POST['senha_login'];

$sql = "SELECT nome_admin,email_admin,senha_admin,status FROM tb_admin WHERE email_admin = '$login_admin'";//and status = 'Ativo';

$buscar = mysqli_query($conexao, $sql);

$total = mysqli_num_rows($buscar);

while ($array = mysqli_fetch_array($buscar)) {

	$status = $array['status'];
	$senha_admin = $array['senha_admin'];
	$nome_admin = $array['nome_admin'];
	$login_admin = $array['email_admin'];
	$email_admin = $login_admin;
	$senhacodificada = sha1($senha_login);

	if ($total > 0) {
		if($senhacodificada == $senha_admin && $status == 'Ativo'){
			
			session_start();
			$_SESSION['login_admin'] = $login_admin;
			$_SESSION['nome_admin'] = $nome_admin;
			
			header('location: ../../telas/tela_inicial.php');
		}elseif($senhacodificada == $senha_admin && $status == 'Inativo'){
			header('location: erro2.php');
		}else{
			header('location: erro.php');
		}

	}else{
		header('location: erro.php');

	}
		
}

?>

