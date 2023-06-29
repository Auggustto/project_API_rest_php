<?php

require_once "../vendor/autoload.php";


//  Verificando se existe um get url
if($_GET["$url"]){

    //  Quebrando a string e transformando num array
    $url = explode("/", $_GET['url']);
}

var_dump($url);




