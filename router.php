<?php

$routes = require ('routes.php');
$uri=parse_url($_SERVER['REQUEST_URI']);
$uri=$uri['path'];

//if($uri=='/'){
//    require "controllers/index.php";
//}elseif ($uri=='/about'){
//    require "controllers/about.php";
//}elseif ($uri=='/contact'){
//    require "controllers/contact.php";
//}



function routeToController($uri,$routes){
if (array_key_exists($uri, $routes)) {
require $routes[$uri];
}else{
abort();
}

}

function abort($code=404){
http_response_code($code);
require "views/{$code}.view.php";
die();
}

routeToController($uri,$routes);

