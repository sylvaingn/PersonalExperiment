<?php


use Bramus\Router\Router;

/* require __DIR__."/config/config.php"; */
require __DIR__ . '/vendor/autoload.php';




$router = new Router;
$router->setNamespace('App\Controller');



$router->get('/animaux', 'ArticlesController@index');


$router->get("/conditions", function(){
    echo "Voici les conditions d'utilisation.";
});

$router->get("/articles/(\d+)", function($id){
    echo "Voici l'article numéro ".$id.".";
});

$router->get("/product/{produit}", function($produit){
    echo "Voici le produit demandé : ".$produit.".";
});


$router->get('/about', function() {
    echo "bienvenue sur la page About!";
});

$router->get('/contact', function () {
    echo "Page contactez-nous.";
});

$router->run();

