<?php

require_once __DIR__."/BDConection.php";
require_once __DIR__."/Usuario.php";

class CrudUsuario
{
    public $conexao;

    public function GetUsuarios()
    {
        $this->conexao = BDConection::getConexao();

        $sql = "select * from usuario";

        $res = $this->conexao->query($sql);

        $usu = [];
        
        $usuarios = $res->fetchAll(PDO::FETCH_ASSOC);
        foreach ($usuarios as $usuario){
            $usu[] = new Usuario($usuario['nome'], $usuario['email'], $usuario['senha'],$usuario['id_usuario'], $usuario['username'],$usuario['id_turma']);
        }
        return $usu;


    }



    public function GetUsuario($id){

    $this->conexao = BDConection::getConexao();

    $sql = "select * from usuario where id_usuario=".$id;

    $res = $this->conexao->query($sql);

    $usuario= $res->fetch(PDO::FETCH_ASSOC);


    $usu = new Usuario($usuario['nome'], $usuario['email'],$usuario['senha'],$usuario['id_usuario'],$usuario['username'],$usuario['id_turma']);
    return $usu;

}

    public function CadastrarUsuario(Usuario $usuario){
        $this->conexao = BDConection::getConexao();

        $usu[] = $usuario->getNome();
        $usu[] = $usuario->getEmail();
        $usu[] = $usuario->getSenha();
        $usu[] = $usuario->getUsername();
        $usu[] = $usuario->turma;



        $sql = "insert into usuario (nome,email,senha,username,id_turma) values ('".$usu[0]."','".$usu[1]."','".$usu[2]."','".$usu[3]."',".$usu[4].")";

        $res = $this->conexao->query($sql);

        return $res;

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

        $sql = "update usuario set username='".$uso[4]."', nome='".$uso[1]."',email='".$uso[2]."',senha='".$uso[3]."' where id_usuario='".$uso[0]."'";

        $res = $this->conexao->query($sql);
    }
}
//
//$crud = new CrudUsuario();
//
//$usu = new Usuario('heitor', 'h@h.com','123',null,'heitor',1);
//
//echo $crud->CadastrarUsuario($usu);