<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./views/login.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <title>Login</title>
  </head>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

  <body>
         <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Cadastrar Usuário</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="./config/controllers/controller.php" method="post" oninput='senha2.setCustomValidity(senha2.value != senha.value ? "Senhas não conferem." : "")'>
          <label for="nome" >Nome</label>
          <input type="text" id="nome" name="nome" required autofocus>
          <label for="email">Email</label>
          <input type="text" id="email" name="email" required autofocus>
          <label for="senha">Senha</label>
          <input type="password" id="senha" name="senha" required autofocus>
          <div>
          <label for="senha">Confimar Senha</label>
          <input type="password" id="senha2" name="senha2" required autofocus>  
           </div>    
        </div>
        <div class="modal-footer">
          <input type="hidden" id="operacao" name="operacao" value="cadastrar">
          <button type="submit" class="btn btn-success">Salvar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
      
    </div>
  </div>
      <header class="header">
          <h1>Login</h1>
      </header>
     
      <form action="./config/controllers/login.php" method="post">
      <div id="login">
    <div class="box">
        <input type="text" name="email" id="email" placeholder="E Mail" required autofocus>
        <input type="password" name="senha" id="senha" placeholder="Senha" required autofocus>
        <input type="hidden" name="log" id="log" value="logon">
        <button class="btn btn-light">Login</button>
        <div> <a href="" data-toggle="modal" data-target="#myModal">Cadastrar usuário</a></div>
       
    </div>
      </div>
      </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
