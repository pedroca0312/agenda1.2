<?php
session_start();
require_once __DIR__."/BDConection.php";
require_once __DIR__."/Atividade.php";

class CrudAtividade
{
    public $conexao;
    public $id_turma;

    function __construct()
    {
        $this->id_turma = $_SESSION['id_turma'];

    }


    public function GetAtividades(){


        $this->conexao = BDConection::getConexao();

        $sql = "select * from atividade WHERE id_turma = $this->id_turma";

        $res = $this->conexao->query($sql);

        $at = [];

        $atividades= $res->fetchAll(PDO::FETCH_ASSOC);


        foreach ($atividades as $atividade) {
            $at[] = new Atividade($atividade['id_atividade'],$atividade['descricao'], $atividade['data_previsao']);
        }
        return $at;

    }

    public function GetAtividade($id){

        $this->conexao = BDConection::getConexao();

        $sql = "select * from atividade where id_atividade=".$id;

        $res = $this->conexao->query($sql);

        $atividade= $res->fetch(PDO::FETCH_ASSOC);


        $at = new Atividade($atividade['id_atividade'],$atividade['descricao'], $atividade['data_previsao']);
        return $at;

    }

    public function cadastroAgenda(Atividade $atividade){
        $this->conexao = BDConection::getConexao();

        $sql = "insert into atividade (descricao,data_previsao, id_turma) values ('".$atividade->getDescricao()."','".$atividade->getDataPrevisao()."','".$_SESSION['id_turma']."')";

        $res = $this->conexao->query($sql);
    }

    public function deletaAtividade($id){

        $this->conexao = BDConection::getConexao();

        $sql = "delete from atividade where id_atividade=".$id;

        $res = $this->conexao->query($sql);

        return $res;
    }

    public function editaAtividade(Atividade $atividade){

        $this->conexao = BDConection::getConexao();

        $at[] = $atividade->getIdAtividade();
        $at[] = $atividade->getDescricao();
        $at[] = $atividade->getDataPrevisao();

        $sql = "update atividade set descricao='".$at[1]."',data_previsao='".$at[2]."' where id_atividade='".$at[0]."'";

        $res = $this->conexao->query($sql);
    }

}