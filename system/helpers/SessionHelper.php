<?php

/**
 * Descrição da classe SessionHelper <br>
 * classe criada para servir de helper ao sistema, auxiliando na utilização <br>
 * de sessoes. 
 * 
 * @author Michael Quesado <michaelquesado@outlook.com>
 */
class SessionHelper {

    /**
     *  Definir a sessão com os dados obtidos do bd 
     */
    public function setSession(Array $array) {
        if (is_array($array) && count($array) > 0) {
            foreach ($array as $k => $v) {
                $_SESSION[$k] = $v;
            }
        }
    }

    /** 
     * Recuperar os dados mantidos na sessão, uma coluna especifica. 
     */
    public function getSession($row) {
        if (is_null($row)) {
            return false;
        }
        return $_SESSION[$row];
    }

    

}
