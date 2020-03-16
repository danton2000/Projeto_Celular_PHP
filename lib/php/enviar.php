<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Envio de Mensagem</title>
    </head>
    <body>
        <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $problema = $_POST['problema'];

        require '../vendor/autoload.php';

        $from = new SendGrid\Email(null, "herotech2019senacrs@gmail.com");
        $subject = "Mensagem de Contato";
        $to = new SendGrid\Email(null, "herotech2019senacrs@gmail.com");
        $content = new SendGrid\Content("text/html", "Olá Danton, <br><br>Nova mensagem de contato!<br><br>Nome: $nome<br>Email: $email<br>Problema $problema");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        header("location: ../../index.html#contato");
        ?>
    </body>
</html>
