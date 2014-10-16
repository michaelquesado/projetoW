<?php


/**
 * Description of Produtos
 *
 * @author Michael Fillip da Silva Quesado
 */
class Produtos extends Model {

    private $name;

    public function __construct() {
        parent::__construct();
        $this->name = "produtos";
        
    }

    public function insert(array $dados) {
        return parent::insert($this->name, $dados);
    }

}
