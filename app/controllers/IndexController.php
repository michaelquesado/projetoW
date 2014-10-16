<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexController
 *
 * @author Michael Quesado <michaelquesado@outlook.com>
 */
class IndexController extends Controller {

    public function index() {
        try {
            $this->redirect('posts', 'index');
            //$this->view("index", "posts");
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

}
