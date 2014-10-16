<?php

class HtmlHelper{
    private  $link;
    
    public function createLink(array $link){
        $this->link = '<a href=' . HOST . DIR . $link['controller'] . '/' . $link['action'] . '</a>';
    }
    
    public function getLink(){
        return $this->link;
    }
    
    public function createForm($url){
        //$form = '<form action="' . HOST . DIR .$url['controller'] .'/'.$url['action'] .'"'. ' method=' .$metodo .
    }
    
}

