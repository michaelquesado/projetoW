<?php

Class PostsController extends Controller {

    public function index() {
        $this->view('index');
    }

    public function detalhes() {
        $this->view('detalhes');
        $this->getParam();
    }

    public function cadastrar() {
        $this->view('cadastrar');
    }

    public function add() {
        if (is_array($_POST) && !is_null($_POST) && !empty($_POST)) {
            $this->debug($_POST);
        }else{
            print "tente passar uma requisição post";
        }
    }

}
