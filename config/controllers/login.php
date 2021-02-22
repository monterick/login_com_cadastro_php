<?php

$log = $_POST['log'];

if($log == 'logon'){
session_start();

$conexao = new mysqli("localhost","root","","teste");
 
if(empty($_POST['email']) || empty($_POST['senha'])) {
      
    echo "<script type='text/javascript'> 
    alert('Os campos Email e Senha devem ser preenchidos');
    window.location.href='../../index.php';</script>";	
    exit();
}
 $email = $_POST['email'];
 $senha = $_POST['senha'];
//$email = mysqli_real_escape_string($conexao, $_POST['email']);
//$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$sql = "select nome from usuario where email = '{$email}' and senha = '{$senha}'";

$result = $conexao->query($sql);
 
$row = mysqli_num_rows($result);

$linnom = array();
while($linha = $result->fetch_array()){
  $linnom[] = $linha;
}
foreach($linnom as $key => $value){
  $nome = $value['nome'];
}
 
if($row == 1) {
	$_SESSION['email'] = $email;
  $_SESSION['senha'] = $senha;
   $_SESSION['nome'] = $nome;
  header('Location: ../../views/app.php');
	exit();
} else {
  header('Location: ../../index.php?mensagem=nolog');
	$_SESSION['nao_autenticado'] = true;
    
	exit();    
    }
  }else if($log == 'logoff'){


session_start();
session_destroy();
unset($_SESSION['email']);
unset($_SESSION['senha']);
header("location: ../../views/app.php");
exit();
  }
?>