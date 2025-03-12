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

    <!-- INÍCIO DA CONSTRUÇÃ DO FORMULÁRIO CONTATO -->

    <section class="contato">
        <div class="cont">
            <h1>FALE CONOSCO</h1>

            <form action="email.php" method="post">

        <input type="text" name="nome" placeholder="Digite o seu nome">
        <br>
        <input type="email" name="e-mail" placeholder="Digite seu e-mail">
        <br>
        <input type="tel" name="telefone" placeholder="Digite seu Whatsapp">
        <br>
        <textarea name="comenatario" placeholder="Digite seu comentário/dúvida"></textarea>
        <br>
        <input type="submit" name="enviar" placeholder="ENVIAR">

            </form>
        </div>

        <div class="cont">
            <img src="img/contato.png" alt="imagem de contato e-commerce">
        </div>
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


</body>
</html>