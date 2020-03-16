<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" type="text/css" href="../../lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../lib/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container" id="telas_cadastro_admin">
        <div id="botao_direita">
            <a href="listar_admin.php" role="button" id="botao_voltar_admin" class="btn btn-sm">Voltar</a>
        </div>

        <h4>Cadastro de Administradores</h4>
        <form action="inserir_admin.php" method="post">
            <!--POST = inserir dados -->
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

                <div id="botao_direita">
                    <button type="submit" name="cadastrar" id="botao_cadastrar_admin" class="btn btn-sm">Cadastrar</button>
                </div>
             </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <script>
        function validaSenha(input) {
            if (input.value != document.getElementById('txtSenha').value) {
                input.setCustomValidity('Repita a senha corretamente');
            } else {
                input.setCustomValidity('');
            }
        }
    </script>

</body>

</html>