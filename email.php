<?php


if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['telefone']) && !empty($_POST['comentario'])) {
    $to = "felippefardin@hotmail.com";
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $telefone = trim($_POST['telefone']);
    $comentario = trim($_POST['comentario']);
    $assunto = "Mensagem via site";

    $mailHeaders = "From: " . $email . "\r\n" . 
                   "Reply-To: " . $email . "\r\n" .
                   "MIME-Version: 1.0\r\n" .
                   "Content-Type: text/plain; charset=UTF-8\r\n" .
                   "Nome: " . $nome . "\r\n" . 
                   "Email: " . $email . "\r\n" . 
                   "Telefone: " . $telefone . "\r\n" . 
                   "Comentário: " . $comentario . "\r\n";  

    if (mail($to, $assunto, $mailHeaders)) {
        header("Location: email.php");
        exit;
    } else {
        echo "Erro ao enviar o e-mail.";
    }
} else {
    echo "Preencha todos os campos obrigatórios.";
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="m-conteudo" id="modal-sucesso">

        <div class="modal">
            <img src="img/logo.png" alt="logotipo mercado">
            <h2>Obrigado pela mensagem!</h2>
            <p>Nossa equipe já recebeu o seu <span>E-mail</span> e iremos analisar seu caso..</p>
            <p>Entraremos em <span>CONTATO</span> em breve.</p>

            <button onclick="sair()" class="fechar">FECHAR</button>
        </div>

    </div>

    <script src="js/sucesso.js"></script>
</body>
</html>