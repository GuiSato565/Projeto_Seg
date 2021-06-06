<?php
define('HOST', 'fdb28.awardspace.net');
define('USUARIO', '3648984_teste');
define('SENHA', 'batman@1');
define('DB', '3648984_teste');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

?>