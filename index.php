<?php 
  include_once 'controller/login.php'; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Entrar</title>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="login">
        <div class="form">
          <form class="register" method="post">
            <input type="text" name="cad_user" placeholder="Usuário"/>
            <input type="text" name="cad_email" placeholder="Email"/>
            <input type="password" name="cad_password" placeholder="Senha"/>
            <button type="submit" name="btnCadastrar">CADASTRAR</button>
            <p id="lbEntrar"><a class="message" href="#">Entrar</a></p>
          </form>
          <form class="login-form" method="post">
            <input type="text" name="login_user" placeholder="Usuário"/>
            <input type="password" name="login_password" placeholder="Senha"/>
            <button type="submit" name="btnEntrar">ENTRAR</button>
            <p id="lbCriarConta"><a class="message" href="#">Criar Conta</a></p>
          </form>
        </div>
      </div>
      
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="js/login.js"></script>
</body>
</html>