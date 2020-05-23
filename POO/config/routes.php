<?php

use Bramus\Router\Router;


$router = new Router;
$router->setNamespace('App\Controller');





$router->get("/conditions", function(){
    echo "Voici les conditions d'utilisation.";
});

$router->get("/articles/(\d+)", function($id){
    echo "Voici l'article numéro ".$id.".";
});


$router->get('/about', function() {
    echo "bienvenue sur la page About!";
});

$router->get('/contact', function () {
    echo "Page contactez-nous.";
});

$router->run();

