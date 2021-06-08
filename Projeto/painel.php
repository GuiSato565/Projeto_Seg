<?php
session_start();
include('veririca_login.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Área Restrita</title>
<link rel="stylesheet" href="css/css-login/login.css">
<!-- Bootstrap CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    

</head>

<body>
	<div class="caixa">
        	<h2>Jogador <?php echo $_SESSION['nome'];?> logado</h2>

        <div class="Links">
	    	<a href="index.php" style="text-align:center;"><p>Voltar para home</p></a>
        </div>
	</div>
	
	
</body>
</html>
