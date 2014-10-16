<?php

/**
 * Description of controller
 *
 * @author Michael Fillip da Silva Quesado
 */
class Controller extends System {

    protected $layout = true;
    private $data = null;

    /**
     * Metodo responsavel por carregar uma views em especifico, se passado 
     * <br /> apenas o nome do arquivo ele vai procurar na pasta view da classe.
     * @param $view, $dir. Arquivo a ser carregado e seu Diretorio.
     */
    public function view ($view , $dir = null) {

        if (!$this->layout) {
            return false;
        }
        if (!is_string($view) || !isset($view) || is_null($view)) {
            throw new RuntimeException("Impossivel carregar view.");
        }
        
        $dir = (is_null($dir) || empty($dir)) ? $this->getCallClassView() : ucfirst($dir);

        if ($dir == "Index") {
            return include_once (VIEWS . 'index.php');
        }
        
       $inc = VIEWS . $dir . '/' . $view . '.php';

        if (!file_exists($inc)) {
            throw new RuntimeException("<strong>Certifique-se que o arquivo $view.php foi criado.</strong>");
        }

        $post = $this->getDataToView();


        if (is_array($this->getDataToView()) && !is_null($this->getDataToView()) && count($this->getDataToView())) {
            extract($this->getDataToView(), EXTR_PREFIX_SAME, "_");
        }
        return include_once ($inc);
    }

    /**
     * Funcao responsavel por descubrir qual classe chamou a funcao view, caso<br>
     * ele n passe um diretorio, para carregar de uma outra pagina, então deve carregar da<br> 
     * sua pasta padrão de views.
     */
    private function getCallClassView() {
        $array = debug_backtrace();
        $array = explode('Controller', $array[2]['class']);
        return $array[0];
    }

    /**
     * Metodo responsavel por carregar um model, dentro de um controller.
     * @param file $file tenta carregar o arquivo.
     */
    protected function loadModel($file) {
        include_once('app/models/' . $file . '.php');
    }

    /**
     * Metodo responsavel por setar dados para a views
     * @param  $dados
     */
    protected function setDataToView($dados) {
        $this->data = $dados;
    }

    /**
     * Metodo responsavel por retornar o atriburo data, que contem valores a serem carregados na view
     * @return data mixed
     */
    private function getDataToView() {
        return $this->data;
    }



}

