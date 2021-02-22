<?php

if(filter_input(INPUT_POST,"operacao")){
    $operacao = filter_input(INPUT_POST,"operacao");
}elseif(filter_input(INPUT_GET,"operacao")){
    $operacao = filter_input(INPUT_GET,"operacao");
}

if($operacao == "cadastrar"){
        
    include("../../apis/user.php");
    $nome = filter_input(INPUT_POST,"nome");
    $email = filter_input(INPUT_POST,"email");
    $senha = filter_input(INPUT_POST,"senha");      
    $user = new Usuario();
    $dados = array($nome,$email,$senha);
    $result = $user->Cadastro($dados);

}elseif($operacao == "editar"){
$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$senha = filter_input(INPUT_POST, 'senha');
$email = filter_input(INPUT_POST, 'email');
echo $id;
$dados = array($id,$nome,$senha,$email);
include '../../apis/user.php';
$user = new Usuario();
$result = $user->editar($dados);
if($result){
    header("location: ../../views/app.php");
}


}elseif($operacao == "excluir"){
 $id = filter_input(INPUT_GET,"id");
    if(filter_input(INPUT_GET,"confirm")){
        $confirm = filter_input(INPUT_GET,"confirm");
        if($confirm == 'yes'){
            //echo "confirmou";
            $dados = array($id);
        include("../../apis/user.php");
        $user  =new Usuario();
        $result = $user->delete($dados);
        //if($result){
          //  echo "<script language='javascript'>
            //alert('Excuido com sucesso');
            //window.location.href='/teste/views/app.php';
            header("location: ../../views/app.php");
            //</script>";                                    
            //}
        }else{     
            //echo "recusou";       
            header("location: ../../views/app.php");
        }
    }else{

        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Document</title>
        </head>
        <body>
        <script src='../../sweetalert.js'></script>
            <script type='text/javascript'>
            Swal.fire({
                title: 'Deseja excluir?',
                text: 'exclusão',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim!'
              }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                      'Excluído!',
                      'Usuário deletado',
                      'success'
                    )
                    window.location.href='../../config/controllers/controller.php?operacao=excluir&confirm=yes&id={$id}';
                  }else{
                     
                      window.location.href='../../config/controllers/controller.php?operacao=excluir&confirm=no';
                  }
              })         
            </script>
        </body>
        </html>";


    }
}

?>