<?php
/*Assim que for chamada, o primiero é iniciar uma session*/
session_start();
/*Definindo o separador de diretorios, tornando assim um padrão de divisão.*/
define('DS', '/');
/*
 *  Definindo o host e o diretorio, que servirar para carregar arquivos de qualquer local 
 *  um problema é por exemplo se eu colocar root/pasta/outrapasta/sistema não vai carregar 
 *  corretamente os arquivos.
 */
$dir = explode(DS, $_SERVER['SCRIPT_NAME']);
/*Então, para pegar do root ate a pasta do sistema, o foreach abaixo */
$fulldir = '';

for($i = 0; $i < count($dir) - 1; $i++){
    $fulldir .= $dir[$i] . '/';
}
/*DIR, constante guarda o caminho da raiz ate a pasta de instalacao do sistema*/
define('DIR', $fulldir);

/*HOST, constante que guarda o nome do host*/
$host = explode(DS, $_SERVER['SERVER_NAME']);
define('HOST', 'http://' . $host[0]);

/*Definindo o SERVER, juncao das constantes HOST + DIR*/
define('SERVER' , HOST.DIR);

/*Constantes do sistema, os diretorios padrões do sistema*/
define('CONTROLLERS', 'app/controllers/');
define('MODELS', 'app/models/');
define('VIEWS', 'app/views/');
define('SYSTEM', 'system/');
define('HELPERS', 'system/helpers/');
define('ASSETS', 'assets/');
define('LAYOUT',  HOST . DIR . 'layout/');


/*A cada instancia precisamos carregar as seguintes classes*/
require_once('system/System.php');
require_once('system/controller/Controller.php');
require_once('system/model/Model.php');

/*Reescrita do metodo __autoload
 * uma necessidade disto é, posso definir meus helpers e em qualquer canto do 
 * sistema posso dar um new Helper e ele ja vai saber onde chamar :) legal né
 */
function __autoload($file) {
    $file .= ".php";
    if (file_exists(MODELS . $file)) {
        require_once(MODELS . $file);
    } else if (file_exists(HELPERS . $file)) {
        require_once(HELPERS . $file);
    } else {
        die('Erro ao tentar carregar arquivo ' . $file);
    }
}
