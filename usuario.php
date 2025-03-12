<!-- CONFIGURAÇÕES DO PHP -->
<?php

//Iniciar uma sessão
session_start();

if((!isset($_SESSION['email_cliente'])==true) and (!isset($_SESSION['senha_cliente'])==true))
{
//Destruir as variaveis
    unset($_SESSION['email_cliente']);
    unset($_SESSION['senha_cliente']);
    header('Location:entrar.php');
}
else {
     //Criar uma variaveis de acesso
     $logado = $_SESSION['email_cliente'];


}





?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Brasil</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>

    <header>
            <div class="logo">
                <img src="img/logo.png" alt="logotipo E-commerce Brasil">
            </div>
        

        <nav>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="celular.html">CELULAR</a></li>
                <li><a href="roupa.html">ROUPAS</a></li>
                <li><a href="tenis.html">TÊNIS</a></li>
                <li><a href="cadastro.php">CADASTRAR</a></li>
                <li><a href="entrar.php">ENTRAR</a></li>
                <li><a href="contato.php">CONTATO</a></li>
            </ul>
        </nav>

    </header>

    <!-- INÍCIO DA CONSTRUÇÃO DA SESSÃO DO USUÁRIO -->

    <section class="barra_top">
        <div class="barra">
            <h1>Área do Usuário</h1>
        </div>
        <div class="barra">
            <a href="sair.php">SAIR</a>
        </div>
    </section> 

    <section class="usuario">
        <?php
        echo "<h2>Olá, $logado</h2>";
        ?>
        <p>Seja Bem-vindo ao E-commerce</p>
    </section>

   <!-- INICIO DO RODAPÉ -->

   <footer>

    <div class="rodape">
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="roupas.html">ROUPAS</a></li>
            <li><a href="tenis.html">TÊNIS</a></li>
            <li><a href="contato.html">CONTATO</a></li>
            <li><a href="cadastro.php">CADASTRO</a></li>
            <li><a href="entrar.php">ENTRAR</a></li>
        </ul>
    </div>

    <div class="rodape">
        <p>Rua Brasil, nº 32 - Bairro Livre</p>
        <p>Vila Velha - ES - 29101-800</p>
    </div>

    <div class="rodape">
        <p>Siga as nossas redes sociais</p>
        <a href="#"><img src="img/facebook.png" alt="facebook"></a>
        <a href="#"><img src="img/instagram.png" alt="instagram"></a>
        <a href="#"><img src="img/youtube.png" alt="youtube"></a>
    </div>
   </footer>
    


<!-- CONFIGURAÇÃO DO JAVASCRIPT -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="js/cycle.js"></script>

<!-- CONFIGURAÇÕES DO PHP -->

<?php

if(isset($_POST['submit'])) {

    include_once('conectar.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sexo = $_POST['sexo'];


    $clientes = mysqli_query($conexao, "INSERT INTO cadastro_clientes(nome_cliente, email_cliente, senha_cliente, sexo_cliente) VALUES ('$nome', '$email', '$senha', '$sexo')
    ");
}

?>
    
</body>
</html>