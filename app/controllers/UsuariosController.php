<?php

class UsuariosController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function addUsuarios() {
        try {
            include_once(LAYOUT . 'default.php');
            $this->view(get_class($this), "addUser");
            include_once(LAYOUT . 'default.php');
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function salvarUsuario() {
        $this->layout = false;
        if ($_POST && $_SESSION['role_id'] == 2) {
            $usuarios = new Usuarios();
            $usuarios->setNome($_POST['nome']);
            $usuarios->setSenha($_POST['senha']);
            $usuarios->setRole_id($_POST['nivel']);
            $data = $usuarios->inserir();
            if (is_int($data)) {
                print json_encode($data);
            } else {
                print "Erro ao tentar persistir";
            }
        } else {
            print "Erro, tente mandar requisição via post";
        }
    }

    public function formLogin() {
        try {
            include_once(LAYOUT . 'default.php');
            $this->view(get_class($this), "formLogin");
            include_once(LAYOUT . 'default.php');
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function Login(){
        if($_POST){
            $user = new Usuarios();
            $user->setNome($_POST['nome']);
            $user->setSenha($_POST['senha']);
            $data =  $user->logar();
            if(count($data) > 0){
                    $_SESSION['nome'] = $user->getNome();
                    $_SESSION['role_id']   = (int) $data[0]['role_id'];
                    print json_encode(1);
            }else{
                print "Erro ao tentar logar.";
            }
            
        }
    }
    
    public function Logout(){
        $this->layout = false;
        session_destroy();
        $this->redirect("noticias", 'index');
        
    }

}
