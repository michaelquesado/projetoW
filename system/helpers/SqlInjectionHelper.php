<?php

abstract class SqlInjection {

    static public function filtra($dados) {

        $dados = strip_tags($dados);
        $dados = addslashes($dados);
        $dados = htmlspecialchars($dados);
        
        
        $dados = @preg_replace(sql_regcase('/(from|select|insert|delete|where|drop table|show tables|#|\*| |\\\\)/'), ' ', $dados);
        
        return $dados;
    }

}
