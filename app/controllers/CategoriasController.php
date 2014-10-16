<?php

class CategoriasController extends Controller {

    public function carregaFomulario() {
        try {
            $this->view('formCategoria');
        } catch (Exception $ex) {
            print $ex->getMessage();
        }
    }
    
    
    public function cadastrarCategoria(){
        
    }

}
