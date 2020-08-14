<?php

class Usuario{
    private $id;
    private $nome;
    private $email;

    public function setId($i){
        $this->id = $i;
    }

    public function getId(){
        return $this->id;
    }

    public function setNome($n){
        $this->nome = $n;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setEmail($e){
        $this->email = $e;
    }
    
    public function getEmail(){
        return $this->email;
    }
}

interface UsuarioDAO{
    public function add(Usuario $u);
    public function findAll();
    public function findByEmail($email);
    public function findById($id);
    public function update(Usuario $u);
    public function delete($id);
}
