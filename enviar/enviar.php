<?php
include '../Projeto_Celular/lib/model/conexao.class.php';
include '../Projeto_Celular/lib/model/crud.class.php';

if (isset($_POST['enviar'])) {
    $nome_contato = $_POST['nome_contato'];
    $email_contato = $_POST['email_contato'];
    $mensagem_contato = $_POST['mensagem_contato'];

    $mensagem = new Crud("tbcontatos");
    $array_dados = array(
        "nome_contato" => htmlspecialchars($nome_contato),
        "email_contato" => htmlspecialchars($email_contato),
        "mensagem_contato" => htmlspecialchars($mensagem_contato),
    );

    $resposta = $mensagem->insereCrud($array_dados); //precisa criar um array com os dados

    if ($resposta) {
        $msg = "Sua mensagem foi para a Hero Tech";
        echo "<script>alert('$msg !');
        window.location.assign('../index.php');</script>";
    } else {
        echo ("location: ../../index.php?erro=sent");
    }
}


?>