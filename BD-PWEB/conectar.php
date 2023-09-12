<?php 
$login = $_POST['login'];
$senha = $_POST['senha'];
$host = "localhost";                                      
$user = "id19333383_usuarios";                           
$pass = "9G5cz<DJg*mC77/k";                                     
$banco = "id19333383_clientes";                           
$conexao = mysqli_connect($host, $user, $pass, $banco);  
if (!$conexao) {                                          
 echo "Connection Error". PHP_EOL;
 echo "Error Code: ". mysqli_connect_errno().PHP_EOL;
 echo "Error: Description".mysqli_connect_error().PHP_EOL;
 exit;
}
?>
