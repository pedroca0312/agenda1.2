<?php

require_once 'BDConection.php';
require_once 'Usuario.php';

class CrudLogin
{
    public $conexao;

    public function entrar($usuario, $senha) {





    }

    public function sair($id){

    $this->conexao = BDConection::getConexao();

    $sql = "select * from usuario where id_usuario=".$id;

    $res = $this->conexao->query($sql);

    $usuario= $res->fetch(PDO::FETCH_ASSOC);


    $usu = new Usuario($usuario['nome'], $usuario['email'],$usuario['senha'],$usuario['id_usuario'],$usuario['username']);
    return $usu;

}

    public function CadastrarUsuario(Usuario $usuario){
        $this->conexao = BDConection::getConexao();

        $usu[] = $usuario->getNome();
        $usu[] = $usuario->getEmail();
        $usu[] = $usuario->getSenha();
        $usu[] = $usuario->getUsername();



        $sql = "insert into usuario (nome,email,senha,username) values ('".$usu[0]."','".$usu[1]."','".$usu[2]."','".$usu[3]."')";

        $res = $this->conexao->query($sql);

    }

    public function deletaUsuario($id){

        $this->conexao = BDConection::getConexao();

        $sql = "delete from usuario where id_usuario=".$id;

        $res = $this->conexao->query($sql);

        return $res;
    }

    public function editaUsuarios(Usuario $usuario){

        $this->conexao = BDConection::getConexao();

        $uso[] = $usuario->getIdUsuario();
        $uso[] = $usuario->getNome();
        $uso[] = $usuario->getEmail();
        $uso[] = $usuario->getSenha();
        $uso[] = $usuario->getUsername();

        $sql = "update atividade set nome='".$at[1]."',email='".$at[2]."',senha='".$at[3]."',username='".$at[4]."'   where id_usuario='".$at[0]."'";

        $res = $this->conexao->query($sql);
    }
}