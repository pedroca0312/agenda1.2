<?php

class Atividade
{
    public $id_atividade;
    public $descricao;
    public $data_previsao;
    public $id_turma;
    public $id_disciplina;

    public function __construct($id_atividade,$descricao,$data_previsao)
    {
        $this->id_atividade = $id_atividade;
        $this->descricao = $descricao;
        $this->data_previsao = $data_previsao;
        $this->id_turma = $_SESSION['id_turma'];
        // $this->id_disciplina = $id_disciplina;
    }
   
    public function getIdAtividade()
    {
        return $this->id_atividade;
    }

    public function setIdAtividade($id_atividade)
    {
        $this->id_atividade = $id_atividade;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getDataCadastro()
    {
        return $this->data_cadastro;
    }

    public function setDataCadastro($data_cadastro)
    {
        $this->data_cadastro = $data_cadastro;
    }

    public function getDataPrevisao()
    {
        return $this->data_previsao;
    }

    public function setDataPrevisao($data_previsao)
    {
        $this->data_previsao = $data_previsao;
    }

    public function getIdTurma()
    {
        return $this->id_turma;
    }

    public function setIdTurma($id_turma)
    {
        $this->id_turma = $id_turma;
    }

    public function getIdDisciplina()
    {
        return $this->id_disciplina;
    }

    public function setIdDisciplina($id_disciplina)
    {
        $this->id_disciplina = $id_disciplina;
    }

}