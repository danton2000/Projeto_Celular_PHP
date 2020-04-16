<?php
include '../Projeto_Celular/lib/model/conexao.class.php';
include '../Projeto_Celular/lib/model/crud.class.php';

if (isset($_POST['enviar'])) {
    $nome_contato = $_POST['nome_contato'];
    $email_contato = $_POST['email_contato'];
    $mensagem_contato = $_POST['mensagem_contato'];

    $mensagem = new Crud("tbcontatos");
    $array_dados = array(
        "nome_contato" => $nome_contato,
        "email_contato" => $email_contato,
        "mensagem_contato" => $mensagem_contato,
    );

    $resposta = $mensagem->insereCrud($array_dados); //precisa criar um array com os dados

    if ($resposta) {
        echo '
        <meta charset="utf-8">
        <link rel="stylesheet" href="../lib/css/style.css">
        <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
            <div class="container" id="tamanho_container">
                <center>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <h3 id="topo_listar_h">Mensagem Enviada com Sucesso</h3>
                <div id="topo_listar">
                    <a href="../index.php" id="botao_listar" class="btn btn-sm">Voltar para o Site</a>
                </center>
                </div>
            </div>
        ';
    } else {
        echo ("location: ../../index.php?erro=sent");
    }
}


?>