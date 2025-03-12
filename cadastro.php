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

    <!-- INÍCIO DA CONSTRUÇÃ DO FORMULÁRIO CADASTRO -->

   <div class="cadastro">
    <div class="cad" id="cadastro">
        <h1>Cadastro de Cliente</h1>
        <form action="#" method="post">
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo"> <br>

            <input type="email" id="email" name="email" placeholder="Digite seu melhor e-mail"> <br>

            <input type="password" id="senha" name="senha" placeholder="Digite uma senha segura"> <br>

            <input type="radio" id="feminino" name="sexo" value="F">Feminino

            <input type="radio" id="masculino" name="sexo" value="M">Masculino <br>

            <input type="submit" name="submit" id="submit" value="CADASTRAR">
            
        </form>

    </div>

    <div class="cad">
        <img src="img/cliente.png" alt="">
    </div>

    </div>

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

    header('Location:entrar.php');
}

?>
    
</body>
</html>