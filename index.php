<?php
 
 if(filter_input(INPUT_GET,"mensagem")){
   $mensagem = filter_input(INPUT_GET,"mensagem");
   if($mensagem == "sucesso"){

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
    </head>
    <body>
    <script src='sweetalert.js'></script>
        <script type='text/javascript'>
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Usuário Salvo com Sucesso!',
          showConfirmButton: false,
          timer: 1500
        })
        </script>
    </body>
    </html>";

  }elseif($mensagem == "cadastrado"){
   echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>
<script src='sweetalert.js'></script>
    <script type='text/javascript'>
Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Email já cadastrado!',
  footer: ''
})
    </script>
</body>
</html>";

  }elseif($mensagem == "nolog"){
    echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>
<script src='sweetalert.js'></script>
    <script type='text/javascript'>
Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Email ou senha errados!',
  footer: ''
})
    </script>
</body>
</html>";
  }else{
    echo "<script language='javascript'>
    alert('Erro ao gravas os dados!');
    </script>";
  }
}

include(dirname(__FILE__)."/views/login.php");
//include './views/login.php';
//include './config/conexao.php';

?>