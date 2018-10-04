<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 04/10/18
 * Time: 08:38
 */

class Turma
{
    public $ano;
    public $nome;
    public $id_turma;
    public $id_curso;

public function __construct($ano,$nome,$id_turma,$id_curso)
{
    $this->ano = $ano;
    $this->nome = $nome;
    $this->id_turma = $id_turma;
    $this->id_curso = $id_curso;

}

    /**
     * @return mixed
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * @param mixed $ano
     */
    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getIdTurma()
    {
        return $this->id_turma;
    }

    /**
     * @param mixed $id_turma
     */
    public function setIdTurma($id_turma)
    {
        $this->id_turma = $id_turma;
    }

    /**
     * @return mixed
     */
    public function getIdCurso()
    {
        return $this->id_curso;
    }

    /**
     * @param mixed $id_curso
     */
    public function setIdCurso($id_curso)
    {
        $this->id_curso = $id_curso;
    }
}