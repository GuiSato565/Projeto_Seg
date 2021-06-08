<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastro </title>
  <link rel="stylesheet" href="./css/css-cadastro/cadastro.css">
</head>
<body>
  <div id="main-container">
    <h1>Cadastre-se</h1>
    <form id="register-form" action="insert.php" method="POST">
      <div class="box">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail">
      </div>
      <div class="half-box spacing">
          <label for="name">Nome</label>
          <input type="text" name="nome" id="nome" placeholder="Digite seu nome" >
      </div>
      <div class="half-box">
          <label for="lastname">Sobrenome</label>
          <input type="text" name="sobrenome" id="sobrenome" placeholder="Digite seu sobrenome">
      </div>
      <div class="half-box spacing">
        <label for="lastname">Senha</label>
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
      </div>
      <div class="full-box">
        <input id="btn-submit" type="submit" value="Registrar">
        <a href="login.php"><p>Fazer Login</p></a>
      </div>
    </form>
  </div>
</body>
</html>
