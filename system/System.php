<?php

class System {

    private $_url;
    private $_explode;
    private $_controller;
    private $_action;
    private $_params;

    public function __construct() {
        $this->setUrl();
        $this->setExplode();
        $this->setController();
        $this->setAction();
        $this->setParams();
    }

    /**
     * Setando a url
     */
    private function setUrl() {
        $this->_url = (isset($_GET['url'])) ? $_GET['url'] : 'index/index';
    }

    /**
     * dentro do _explode colocando todos os dados passado pela url
     */
    private function setExplode() {
        $this->_explode = explode('/', $this->_url);
    }

    /**
     * Setando o controller
     */
    private function setController() {
        $cnt = (!isset($this->_explode[0]) || $this->_explode[0] == null || $this->_explode[0] == 'index') ? 'index' : $this->_explode[0];
        $this->_controller = ucfirst($cnt) . 'Controller';
    }

    /**
     * Setando a action
     */
    private function setAction() {
        $ac = (!isset($this->_explode[1]) || $this->_explode[1] == null || $this->_explode[1] == 'index') ? 'index' : $this->_explode[1];
        $this->_action = $ac;
    }

    /**
     * Os parametros passados seram setados dentro de _params
     */
    private function setParams() {
        $explode_aux = $this->_explode;
        /* removendo o controller e a action, aqui so trabalhamos com os parametros */
        unset($explode_aux[0], $explode_aux[1]);
        /* se a ultima posicao do array for vazia, entao devemos remova-la, um problema disso 
         * foi enfrentado na versão anterior, que quando passava para os aparametros alterava o caminha para se chegar nos arquivos de css, js
         * devido a aumentar desnecessariamente uma barra "/", ai isso me deu muita dor de cabeça para rodar em ambientes diferentes.
         */
        if (end($explode_aux) == null) {
            array_pop($explode_aux);
        }

        $this->_params = $explode_aux;
    }

    /**
     * Metodo principal da class System, o metodo run é chamado na index, iniciando <br>
     * as demais funcionalidades necessarias a cada instancia.
     */
    public function run() {
        $controller_path = CONTROLLERS . $this->_controller . '.php';
        if (!file_exists($controller_path)) {
            $this->redirect('posts');
            //die('Erro ao tentar carregar controller ' . $this->_controller);
        }
        require_once($controller_path);

        $app = new $this->_controller();
        $app->debug();
        $action = $this->_action;

        if (!method_exists($app, $action)) {
            die('Erro ao tentar carregar action');
        }
        $app->$action();
    }

    /**
     * Metodo responsavel por retornar os parametros enviados via url
     * @author Michael Quesado <michaelquesado@outlook.com>
     */
    public function getParam() {
        return $this->_params;
    }

    /**
     * Metodo responsavel por "debugar" print_r() no parametros recebidos
     * @param all $param Mande ao para ser debugado.
     * @author Michael Quesado <michaelquesado@outlook.com>
     */
    public function debug($param = null) {
        if (isset($param) && !empty($param) && !is_null($param)) {
            print "<div class='container'>";
             print "<div class='row'>";
              print "<div id='debug'>";
               print "<pre>";
                 print_r($param);
               print "</pre>";
              print "</div>";
             print "</div>";
            print "</div>";
        }
    }

    /**
     * Metodo responsavel por realizar o redirecionamento de uma area para outra do site.
     */
    public function redirect($controller, $action = null, $param = null) {
        if (!isset($controller) || empty($controller))
            return false;
        $action = (empty($action) || $action == null) ? 'index' : $action;
        $param = (is_null($param) || empty($param)) ? null : $param;
       
        header("Location:" . SERVER . $controller .'/' .$action.'/'.$param);
    }

}
