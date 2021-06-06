<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="./css/css-login/login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="caixa">
        <h2>Login</h2>
        <?php
          if(isset($_SESSION['nao_autenticado'])):
        ?>
        <div>
           <h3 style="color:white; margin-left:10px;">ERRO: Usuário ou senha inválidos.</h3>
        </div>
        
        <?php
          endif;
          unset($_SESSION['nao_autenticado']);
        ?>
        <br>
        <form action="consult.php" method="POST">
            <div class="input-field">
                <input type="text" id="nome" name="nome">
                <label for="nome">Nome:</label>
            </div>

            <div class="input-field">
                <input type="password" id="senha" name="senha">
                <label for="senha">Senha:</label>
            </div>

            <div class="center">
                <button>Entrar</button>
            </div>
        </form>
        <div class="Links">
            <a href="cadastro.php"><p>Ainda não sou cadastrado</p></a>
	    <a href="index.php"><p>Voltar para home</p></a>
        </div>
    </div>
</body>
</html>
