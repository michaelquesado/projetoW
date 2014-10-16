<?php


class Noticias extends Model {

    private $titulo;
    private $resumo;
    private $conteudo;
    private $categoria;
    private $autor;

    public function __construct() {
        parent::__construct();
        parent::setTabela('posts');
    }

    public function inserir() {
        return parent::insert($this->toArray());
    }

    public function read($campos = null, $where = null) {
        return parent::read($campos, $where);
    }

    public function setTitulo($titulo) {
        $this->titulo = SqlInjection::filtra($titulo);
    }

    public function setResumo($resumo) {
        $this->resumo = SqlInjection::filtra($resumo);
    }

    public function setConteudo($conteudo) {
        $this->conteudo = SqlInjection::filtra($conteudo);
    }

    public function setCategoria($categoria) {
        $this->categoria = SqlInjection::filtra($categoria);
    }

    public function setAutor($autor) {
        $this->autor = SqlInjection::filtra($autor);
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getResumo() {
        return $this->resumo;
    }

    public function getConteudo() {
        return $this->conteudo;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function toArray() {
        return array(
            'titulo' => $this->getTitulo(),
            'resumo' => $this->getResumo(),
            'conteudo' => $this->getConteudo(),
            'categoria_id' => $this->getCategoria(),
            'autor' => $this->getAutor()
                
        );
    }

}
