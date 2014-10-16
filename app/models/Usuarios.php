<?php

include_once (VENDOR . "SqlInjection.php");

class Usuarios extends Model {

    private $nome;
    private $senha;
    private $role_id;

    public function __construct() {
        parent::__construct();
        parent::setTabela(get_class($this));
    }

    public function inserir() {
        return parent::insert($this->toArray());
    }

    public function getNome() {
        return $this->nome;
    }

    private function geraMd5($senha) {
        return md5($senha);
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getRole_id() {
        return $this->role_id;
    }

    public function setNome($nome) {
        $this->nome = SqlInjection::filtra($nome);
    }

    public function setSenha($senha) {
        $this->senha = $this->geraMd5(SqlInjection::filtra($senha));
    }

    public function setRole_id($role_id) {
        $this->role_id = SqlInjection::filtra($role_id);
    }

    public function toArray() {
        return array(
            'nome' => $this->getNome(),
            'senha' => $this->getSenha(),
            'role_id' => $this->getRole_id()
        );
    }

    public function logar() {
        return parent::read("id, role_id", "nome = '" . $this->getNome() . "' and senha = '" . $this->getSenha() . "' ");
    }

}
