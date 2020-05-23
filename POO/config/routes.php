<?php

use Bramus\Router\Router;


$router = new Router;
$router->setNamespace('App\Controller');


$router->get('/', 'AppController@index');


$router->get("/animaux", "AnimalController@index");
$router->get("/animaux/create", "AnimalController@create");
$router->post("/animaux", "AnimalController@new");
$router->get("/animaux/(\w+)/edit", "AnimalController@edit");
$router->post("/animaux/(\w+)/edit", "AnimalController@update");
$router->post("/animaux/(\w+)/delete", "AnimalController@delete");
$router->get("/animaux/(\w+)", "AnimalController@show");

$router->get("/zoos", "ZooController@index");
$router->get("/zoos/create", "ZooController@create");
$router->post("/zoos", "ZooController@new");
$router->get("/zoos/(\w+)/edit", "ZooController@edit");
$router->post("/zoos/(\w+)/edit", "ZooController@update");
$router->post("/zoos/(\w+)/delete", "ZooController@delete");
$router->get("/zoos/(\w+)", "ZooController@show");


$router->get("/animal_zoo", "AnimalZooController@index");
$router->get("/animal_zoo/create", "AnimalZooController@create");
$router->post("/animal_zoo", "AnimalZooController@new");
$router->get("/animal_zoo/(\w+)/edit", "AnimalZooController@edit");
$router->post("/animal_zoo/(\w+)/edit", "AnimalZooController@update");
$router->post("/animal_zoo/(\w+)/delete", "AnimalZooController@delete");
$router->get("/animal_zoo/(\w+)", "AnimalZooController@show");







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

