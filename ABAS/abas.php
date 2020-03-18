<!DOCTYPE html>
<html lang="Pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="lib/css/style.css">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
    <title>ABAS</title>
</head>

<body>
    <nav class="container nav_tabs">
        <ul>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab1" checked>
                <label id="label" for="tab1">SmarthPhone</label>
                <div class="content">
                    <form action="inserir_celular.php" method="POST">
                        <div id="header_menu">
                            <h3 id="h3_titulo">Dados do SmarthPhone</h3>
                        </div>
                        <div id="conteudo_menu1" class="container">
                            <div class="row">
                                <div class="col-md-5 form-group">
                                    <label>Nome do SmartPhone</label>
                                    <input type="text" class="form-control" name="nome_cel" placeholder="Insira o numero do celular" required autocomplete="off">
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
                                    <input type="number" class="form-control" name="preco_cel" placeholder="Insira o Preço do SmartPhone" required autocomplete="off">
                                    <!--required = não pode ser em branco -->
                                    <!-- autocomplete="off" = não salva os nomes -->
                                </div>
                            </div>
                            <button type="submit" name="cadastrar" id="botao_cadastrar" class="btn btn-sm">Cadastrar</button>
                        </div>
                    </form>

                    <div id="header_menu">
                        <h3 id="h3_titulo">Lista de SmarthPhone</h3>
                    </div>
                    <div id="conteudo_menu1" class="container">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </li>

            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab2">
                <label id="label" for="tab2">Administrador</label>
                <div class="content">
                    <form action="inserir_admin.php" method="POST">
                        <div id="header_menu">
                            <h3 id="h3_titulo">Dados do Administrador</h3>
                        </div>
                        <div id="conteudo_menu2" class="container">
                            <div class="row">
                                <div class="col-md-5 form-group">
                                    <label>Nome do Administrador</label>
                                    <input type="text" name="nome_adm" placeholder="Digite o seu nome completo" class="form-control" required autocomplete="off">
                                </div>
                                <div class="col-md-5 form-group">
                                    <label>Login do Administrador</label>
                                    <input type="text" name="login_adm" placeholder="Digite o seu login" class="form-control" required autocomplete="off">
                                </div>
                                <div class="col-md-5 form-group">
                                    <label>Senha do Administrador</label>
                                    <input type="password" name="senha_adm" placeholder="Digite a sua senha" class="form-control" required autocomplete="off">
                                </div>

                                <div class="col-md-5 form-group">
                                    <label>Repetir a sua Senha</label>
                                    <input type="password" name="senha_adm2" placeholder="Repita a sua senha" class="form-control" required autocomplete="off" oninput="validaSenha(this)">
                                    <small>Precisa ser igual a senha digitada acima</small>
                                </div>
                            </div>
                            <button type="submit" name="cadastrar" id="botao_cadastrar_admin" class="btn btn-sm">Cadastrar</button>
                        </div>
                    </form>

                    <div id="header_menu">
                        <h3 id="h3_titulo">Lista de Administradores</h3>
                    </div>
                    <div id="conteudo_menu2" class="container">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
</body>

</html>