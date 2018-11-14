<?php

require_once __DIR__."/BDConection.php";
require_once __DIR__."/Turma.php";

class CrudTurma
{
    public $conexao;

    public function GetTurmas()
    {
        $this->conexao = BDConection::getConexao();

        $sql = "select * from turma";

        $res = $this->conexao->query($sql);

        $usu = [];

        $turmas = $res->fetchAll(PDO::FETCH_ASSOC);
        foreach ($turmas as $turma){
            $turm[] = new Turma($turma['ano'], $turma['nome'],$turma['id_turma'], $turma['id_curso']);
        }
        return $turm;


    }



    public function GetTurma($id_turma){

        $this->conexao = BDConection::getConexao();

        $sql = "select * from turma where id_turma=".$id_turma;

        $res = $this->conexao->query($sql);

        $turma= $res->fetch(PDO::FETCH_ASSOC);


        $turm = new Turma($turma['ano'], $turma['nome'],$turma['id_turma'], $turma['id_curso']);

        return $turm;

    }

    public function CadastrarTurma(Turma $turma){
        $this->conexao = BDConection::getConexao();

        $turm[] = $turma->getAno();
        $turm[] = $turma->getNome();

        $sql = "insert into turma (ano,nome) values ('".$turm[0]."','".$turm[1]."')";

        $res = $this->conexao->query($sql);

    }

    public function deletaTurma($id_turma){

        $this->conexao = BDConection::getConexao();

        $sql = "delete from turma where id_turma=".$id_turma;

        $res = $this->conexao->query($sql);

        return $res;
    }

    public function editaTurma(Turma $turma){

        $this->conexao = BDConection::getConexao();


        $turm[] = $turma->getAno();
        $turm[] = $turma->getNome();
        $turm[] = $turma->getIdTurma();

        $sql = "update turma set ano='".$turm[0]."', nome='".$turm[1]."'where id_turma='".$turm[2]."'";

        $res = $this->conexao->query($sql);
    }
}