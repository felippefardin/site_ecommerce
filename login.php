<?php

session_start(); //inicia uma sessão

//Verificar se houve uma ação dentro da página entrar.php

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
   //não está vazio os campos 
   //conectar o banco de dados

   include_once('conectar.php');

   //criar as váriaveis
   
   $email = $_POST['email'];
   $senha = $_POST['senha'];

   //Verificar a tabela do banco de dados

   $sql = "SELECT * FROM cadastro_clientes WHERE email_cliente = '$email' and senha_cliente = '$senha' ";

   $verificar = $conexao -> query($sql);

   //verificar se o registro é válido

   if(mysqli_num_rows($verificar)< 1)
   {
      //destruir as váriaveis da session
    unset($_SESSION['email_cliente']);
    unset($_SESSION['senha_cliente']);
    header('Location:entrar.php');
   }
   else {
      //Criar as variaveis da session
    $_SESSION['email_cliente'] = $email;
    $_SESSION['senha_cliente'] = $senha;
    header('Location:usuario.php');
   }

}
else {
   //o campo está vazio
   header('Location:entrar.php');
}




?>