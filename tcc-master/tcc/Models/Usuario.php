<?php

class Usuario
{
    public $username;
    public $nome;
    public $email;
    public $senha;
    public $id;
    public $turma;


    public function __construct($nome,$email,$senha,$id,$username,$turma)
    {
        $this->nome = $nome;
        $this->email= $email;
        $this->senha= $senha;
        $this->id= $id;
        $this->username = $username;
        $this->turma= $turma;

    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getIdUsuario()
    {
        return $this->id;
    }

    public function setIdUsuario($id)
    {
        $this->id = $id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getTurma()
    {
        return $this->turma;
    }

}


