<?php

namespace App\Controller;

class ArticlesController
{
    public static function index()
    {
        echo "Voici la liste d'articles.";
    }

    public static function show($id)
    {
        echo "Voici l'article numéro ".$id;
    }
}
