<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Editar Usuário</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" method="post">
          <form action="../config/controllers/controller.php" method="post" oninput='senha2.setCustomValidity(senha2.value != senha.value ? "Senhas não conferem." : "")'>
          
          
          <label for="nome" >Nome</label>
          <input type="text" id="nome" name="nome">
          <label for="email">Email</label>
          <input type="text" id="email" name="email">
          <label for="senha">Senha</label>
          <input type="password" id="senha" name="senha">
          <div>
          <label for="senha">Confimar Senha</label>
          <input type="password" id="senha2" name="senha2" required autofocus>  
           </div>         
        </div>
        
        <div class="modal-footer">
        <input type="hidden" name="id" id="id">
        <input type="hidden" id="operacao" name="operacao" value="editar">
        <button type="submit" class="btn btn-success">Salvar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
      
    </div>
  </div>
<div class="container">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Data Registro</th>
      <th scope="col">Ação1</th>
      <th scope="col">Ação2</th>
    </tr>
  </thead>
  <tbody>
  <?php  
        
    include("../apis/user.php");
    $user = new Usuario();
    $listar = $user->Listar();
    foreach ($listar as $key => $value) {
    ?>
    <tr>
      <th scope="row"><?php echo $value['id']?></th>
      <td><?php echo $value['nome']?></td>
      <td><?php echo $value['email']?></td>
      <td><?php echo $value['registro']?></td>
      <td><button type="button" onclick="passarValor('<?php echo $value['id'];?>','<?php echo $value['nome'];?>','<?php echo $value['email'];?>','<?php echo $value['senha'];?>')" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Editar</button></td>
        <td><a href="../config/controllers/controller.php?operacao=excluir&id=<?php echo $value['id']?>" type="button" class="btn btn-danger">Excluir</a></td>     
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
  </div>