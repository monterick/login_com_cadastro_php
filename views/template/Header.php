<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./template/styles.css">
    

    <title>Site</title>
    <?php
    session_start();
    if((!isset($_SESSION['email'])==true)and(!isset($_SESSION['senha'])==true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location: ../index.php');
    }
    $logado = $_SESSION['nome'];
    ?>
  </head>
  <body>
      <header class="header">
          <form action="../config/controllers/login.php" method="post">
          <span><?php echo "Bem Vindo, ". $logado?></span>
          <input type="hidden" name="log" id="log" value="logoff">
          <button    type="submit"  class="btn btn-warning">Sair</button>
        </form>  
     
    </header>