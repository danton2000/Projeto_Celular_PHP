<!DOCTYPE html>
<!-- ENVOLVE TODO UM DOCUMENTO HTML-->
<html lang="pt-br">

<!-- ENVOLVE O CABEÇALHO DE UM DOCUMENTO HTML -->
<head>
	<!-- FORNECE INFORMAÇÕES GERAIS SOBRE O DOCUMENTO -->
	<meta  charset="UTF-8">
	<!-- O TITULO DO DOCUMENTO --> 
	<title>Site Hero Tech</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- LINK CSS PERSONALIZADO-->
	<link rel="stylesheet" href="lib/css/style.css">
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
	<!-- CARROSEL -->
	<link rel="stylesheet" href="lib/owl.carousel/owl-carousel/owl.carousel.css">
	<!-- ICONES -->
	<link rel="stylesheet" href="icons/fontawesome/css/all.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- FAVICON -->
	<link class="img-webp" rel="icon" type="image/png" href="imgs/favicon.webp">	
</head>
	<!--ENVOLVE O CORPO (TEXTO E TAGS) DO DOCUMENTO HTML --> 
<body>
	<!-- É UM INDICADOR DE UM AREA DE CONTEÚDO QUE VEM NO COMEÇO DE UM CONTEÚDO, POPULARMENTE CHAMADO DE "CABEÇALHO" --> 
	<header class="header"><!-- INICIO DA HEADER -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<div class="logo">
						<img class="img-webp logo" src="imgs/logo-hero-tech.webp" alt="Hero Tech" title="Logo Hero Tech" class="logo">
					</div>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#links-menu" style="background-color: white;">
					<i class="material-icons">menu</i>
					</button>
				</div>
			
				<nav id="links-menu" class="menu collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#home">Home</a></li>
						<li><a href="Projeto_Celular/tela_inicial.php">Usar</a></li>
						<li><a href="#sobre">Sobre</a></li>
						<li><a href="#telas">Telas</a></li>
						<li><a href="#contato">Contatos</a></li>
					</ul>
				</nav>
			</div>
		</nav>
	</header> <!-- FIM DA HEADER -->
	<!-- FINAL DO HEADER -->

	<section id="home" class="home background-home"><!-- INICIO DA SECTION HOME-->
		<div class="container text-center">
			<h1 class="titulo-home">SISTEMA DE ESCOLHA DE SMARTPHONE</h1>
			<p class="descricao-home">Escolha o seu SmarthPhone com o melhor preço e melhor Hardware com o nosso Sistema.</p>
			<a class="btn btn-sm" id="botao-usar-sistema" role="button" href="Projeto_Celular/tela_inicial.php">USAR</a>
		</div>
	</section><!-- FINAL DA SECTION HOME-->
	
	<section id="sobre" class="sobre padding-40 background-sobre color-black"><!-- INICIO DA SECTION SOBRE -->
		<div class="container text-center">
			<h1 class="titulo">Sobre</h1>
			<p class="descricao">Nós da Hero Tech desenvolvemos um Software, para que o usuário final,<br> possa escolher o seu SmarthPhone preenchendo um formulário de pesquisa.</p>

			<article class="col-md-3 detalhe-sobre">
				<img class="img-thumbnail img-webp" src="imgs\icones-sobre\free.webp" alt="Cursos Online" title="Cursos Online">
				<h1 class="titulo-sobre">Software Gratuito</h1>
				<p class="sobre-small">Software 100% Gratuito e de fácil acesso</p>
				</article>

			<article class="col-md-3 detalhe-sobre">
				<img class="img-thumbnail img-webp" src="imgs\icones-sobre\suport.webp" alt="Suporte Personalizado" title="Suporte Personalizado">
				<h1 class="titulo-sobre">Suporte Personalizado</h1>
				<p class="sobre-small">Suporte ao Sistema de forma rápida e organizada</p>
			</article>

			<article class="col-md-3 detalhe-sobre">
				<img class="img-thumbnail img-webp" src="imgs\icones-sobre\exclusivo.webp" alt="Conteúdo Exclusivo" title="Conteúdo Exclusivo">
				<h1 class="titulo-sobre">Software Exclusivo</h1>
				<p class="sobre-small">Software único e com qualidade</p>
			</article>
				
			<article class="col-md-3 detalhe-sobre">
				<img class="img-thumbnail img-webp" src="imgs\icones-sobre\acesso.webp" alt="Acesso Imediato" title="Acesso Imediato">
				<h1 class="titulo-sobre">Acesso Imediato</h1>
				<p class="sobre-small">Compre e já comece utilizado o nosso Sistema</p>
			</article>
		</div>
	</section><!-- FINAL DA SECTION SOBRE-->
				
	<section id="telas" class="background-telas padding-40"><!-- INICIO DA SECTION TELAS DO SISTEMA -->
		<div class="container text-center">
			<h1 class="titulo">Telas do Sistema</h1>
			<p class="descricao">As telas do sistema desenvolvido pela Hero Tech<br>
			Escolha seu smarthphone com o nosso sistema com o melhor custo e benifício e com uma ótima qualidade de hardware.</p>
			<div class="padding-20"></div>	

			<article class="sistema col-md-4">
				<div class="hoverzoom">
					<img src="imgs\telas\TELA_PRINCIPAL.webp" class="img-thumbnail img-webp img-sistema" alt="Tela Principal" title="Tela Principal">
					<div class="retina">
						<h1 class="titulo-detalhe-sistema">Tela Principal</h1>
						<p class="descricao-sistema">Primeira Tela do Sistema</p>
					</div>
				</div>
			</article>

			<article class="sistema col-md-4">
				<div class="hoverzoom">
					<img src="imgs\telas\TELA_LOGIN.webp" class="img-thumbnail img-webp img-sistema" alt="Tela de Login de Administrador" title="Tela de Login de Administrador">
					<div class="retina">
						<h1 class="titulo-detalhe-sistema">Tela de Login de Administrador</h1>
						<p class="descricao-sistema">Autenticação de Usuários</p>
					</div>
				</div>
			</article>

			<article class="sistema col-md-4">
				<div class="hoverzoom">
					<img src="imgs\telas\TELA_CADASTRO_ADM.webp" class="img-thumbnail img-webp img-sistema" alt="Tela de Listagem de Administradores" title="Tela de Listagem de Administradores">
					<div class="retina">
						<h1 class="titulo-detalhe-sistema">Tela de Cadastro de Administradores</h1>
						<p class="descricao-sistema">Adicionar,alterar,excluir e listar Administradores</p>
					</div>
				</div>
			</article>

			<article class="sistema col-md-4">
				<div class="hoverzoom">
					<img src="imgs\telas\TELA_CADASTRO_CELULARES.webp" class="img-thumbnail img-webp img-sistema" alt="Tela de Cadastro de SmarthPhones" title="Tela de Cadastro de SmarthPhones">
					<div class="retina">
						<h1 class="titulo-detalhe-sistema">Tela de Cadastro de SmarthPhones</h1>
						<p class="descricao-sistema">Adicionar,alterar,excluir e listar SmarthPhones</p>
					</div>
				</div>
			</article>

			<article class="sistema col-md-4" >
				<div class="hoverzoom">
					<img src="imgs\telas\TELA_PESQUISA.webp" class="img-thumbnail img-webp img-sistema" alt="Tela de Pesquisar SmarthPhones" title="Tela de Pesquisar SmarthPhones">
					<div class="retina">
						<h1 class="titulo-detalhe-sistema">Tela de Pesquisar SmarthPhones</h1>
						<p class="descricao-sistema">Tela que mostra o SmarthPhone com a configuração e preço escolhida do usuário</p>
					</div>
				</div>
			</article>
		</div>
	</section><!-- FINAL DA SECTION DE TELAS DO SISTEMA -->
		

	<footer id="contato" class="background-contato"><!-- INICIO DA FOOTER CONTATO -->
		<div class="container text-center">
			<h1 class="titulo-contato">Contato</h1>
			<p class="descricao-contato">Entre em contato e tenha todas as suas dúvidas respondidas<br>Responderemos o mais rápido possível</p>
		</div>
		<div class="contato-form">
			<form class="hero_tech-form" method="POST"  action="enviar/enviar.php">
				<input type="text" name="nome_contato" placeholder="Insira o Seu Nome" required autocomplete="off">
				<input type="email" name="email_contato" placeholder="Insira o Seu E-mail" required autocomplete="off">
				<textarea name="mensagem_contato" placeholder="Qual a Mensagem?" required autocomplete="off"></textarea>
				<input type="submit" name="enviar" value="Enviar">
			</form>					
		</div>
	</footer><!-- FINAL DA FOOTER CONTATO -->
		
	<div class="copyright text-center"> <!-- INICIO COPYRIGHT -->
		<p class="copyright">CopyRight Hero Tech 2020 - Todos os direitos reservados.</p>
	</div><!-- FINAL COPYRIGHT-->

	<!--jQuery-->
	<script src="lib/jquery/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="lib/owl.carousel/owl-carousel/owl.carousel.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>