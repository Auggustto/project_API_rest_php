<?php

require_once "../vendor/autoload.php";

// criando 3 atributos privados para gerenciar as urls
// Um para armazenar a classe
// Um para o metodo que vai acessar a pagina
// Um para armazenar o parametro que vai ser passado

//  Verificando se existe um get url
if ($_GET["url"]) {
    //  Quebrando a string e transformando num array para acessar as inf que foi passado
    $url = explode("/", $_GET['url']);

    //  verificando o valor da posição 0
    if ($url[0] === 'api') {

        // Armazenando o serviço que está na posição 1 da URL
        array_shift($url); // array_shift remove o elemento do array de indice 0

        $service = 'App\Controllers\\' . ucfirst($url[0]) . 'Services'; // Nesse caso o indice de posição 1 passa para o indice 0 

        var_dump($service);

        // Validando o metodo que está sendo passado pela URL GET/POST
        $method = strtolower($_SERVER['REQUEST_METHOD']); // strtolower deixa as letras minusculas

        // Chamando o serviço que o usuario quer acessar
        try {
            call_user_func_array(array(new $service, $method), $url);
        } catch (\Exception $e) {
            //
        }
        //var_dump($method);
    }
}
