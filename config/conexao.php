<?php
$host="localhost";
$user="root";
$password="";
$database="teste";

$conexao = new MySQLi($host, $user, $password, $database);
//if($conexao->connect_error){
  // echo "Desconectado! Erro: " . $conexao->connect_error;
//}else{
  // echo "Conectado!";
//}
?>