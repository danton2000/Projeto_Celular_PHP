<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Listagem de Contatos</title>
    <link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../lib/css/style.css">
    <script src="https://kit.fontawesome.com/06ffaaed9a.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container" id="telas_listar">
        <!-- colocar os espaçamentos ficando esponsivo-->
        <div id="botao_direita">
            <a href="../../tela_inicial.php" role="button" id="botao_voltar" class="btn btn-sm">Voltar</a>
        </div>

        <h3>LISTA DE MENSAGENS</h3>
        <div class="table-wrapper-scroll-y my-custom-scrollbar">
            <table class="table table-bordered table-striped mb-0">
                <thead>
                    <tr>
                        <th scope="col">Nome do Contato</th><!-- col = coluna -->
                        <th scope="col">E-mail do Contato</th>
                        <th scope="col">Mensagem do Contato</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("../../lib/model/crud.class.php");
                    $admin = new Crud("tbcontatos");
                    $resposta = $admin->selectCrud("*"); //$resposta está em formato de array

                    foreach ($resposta as $indice => $valor) {
                        echo '<tr>';
                        echo '<td>' . htmlspecialchars($valor->nome_contato) . ' </td>';
                        echo '<td>' . htmlspecialchars($valor->email_contato) . ' </td>';
                        echo '<td>' . htmlspecialchars($valor->mensagem_contato) . ' </td>';
                        echo '<td class="text-center">';
                        echo '<a href="deletar_admin_contatos.php?id_contato=' . $valor->id_contato . '"name="excluir" title="Excluir"><i class="fa fa-trash-o text-danger"></i></a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>