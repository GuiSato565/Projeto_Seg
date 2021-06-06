<?php
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$sobrenome=$_POST['sobrenome'];

$servername = "fdb28.awardspace.net";
$database = "3648984_teste";
$username = "3648984_teste";
$password = "batman@1";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
 header ('Location: login.php');
 
$sql = "INSERT INTO login (nome,email,senha,sobrenome) VALUES ('$nome','$email','$senha','$sobrenome')";
if (mysqli_query($conn, $sql)) {
      echo "";
} else { 
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>