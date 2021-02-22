<?php

class Usuario{

    //Declaração das variáveis
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $registro;
    private $confirmPassword;

    //Funções
    
    public function Cadastro($dados){
       include '../../config/conexao.php'; 
        
        list($nome,$email,$senha) = $dados;        
        $this->setEmail($email);
        $this->setNome($nome);
        $this->setSenha($senha);
        $userFromDb = $conexao->query("select email from usuario where email = '{$this->getEmail()}'");
        $row = mysqli_num_rows($userFromDb);
        
        if($row > 0){
           header('location: ../../index.php?mensagem=cadastrado');    
        }
        //segunda parte
         else{
            header('location: ../../index.php?mensagem=sucesso');            
        $sql = "insert into usuario(nome, email, senha,registro) values('{$nome}','{$email}','{$senha}',now())";
        $result = $conexao->query($sql);       
        
         }
    }
    public function Listar(){
        include '../config/conexao.php';
        $sql = "select id, nome,email,senha,registro from usuario";
        $result = $conexao->query($sql);
        $listar = array();
		while($linha = $result->fetch_array())
		{
			$listar[] = $linha;
		}
		return $listar;        
    }
    public function ListarPorId($dados){

    }
    public function editar($dados){
        include '../conexao.php';
        list($id,$nome,$senha,$email) = $dados;
        $this->setId($id);
        $this->setNome($nome);
        $this->setSenha($senha);
        $this->setEmail($email);
        $sql = "update usuario set nome = '{$this->getNome()}', senha = '{$this->getSenha()}', email = '{$this->getEmail()}', registro = now() where id = '{$this->getId()}'";
        $result = $conexao->query($sql);
        return $result;
    }
    public function delete($dados){
        include '../conexao.php';
        list($id) = $dados;
		$this->setId($id);
		$sql = "DELETE FROM usuario WHERE id = '{$this->getId()}'";
        $result = $conexao->query($sql);
        return $result;        
		} 


    //gets e Seters
    
    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getSenha(){
        return $this->senha;
    }
    public function setRegistro($registro){
        $this->registro = $registro;
    }

    public function getRegistro(){
        return $this->registro;
    }
    public function setConfirmPassword($confirmPassword){
        $this->confirmPassword = $confirmPassword;
    }
    public function getConfirmPassword(){
        return $this->confirmPassword;
    }

}

?>