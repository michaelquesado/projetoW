<?php

include_once(VENDOR . 'SqlInjection.php');
class Categorias extends Model {

    private $categoria;

    public function __construct() {
        parent::__construct();
        $this->setTabela("categorias");
    }
    
    public function inserir() {
        return parent::insert($this->toArray());
    }
    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria($categoria) {
        $this->categoria = SqlInjection::filtra($categoria);
    }
    
    public function toArray(){
            return array('categoria' => $this->getCategoria());
    }
    
    public function getTodasCategorias(){
        return parent::read();
    }
    

}
