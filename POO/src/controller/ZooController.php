<?php

namespace App\Controller;

class ZooController extends AbstractController
{

    public static function index()
    {
        echo "La liste de tous les zoos.";
    }

    public static function show(int $id)
    {
        echo "Le zoo numéro " . $id;
    }

    public static function create()
    {
        echo "Créer un zoo";
    }

    public static function new()
    {
        echo "Le zoo vient d'être créé.";
    }

    public static function edit(int $id)
    {
        echo "Modifier le zoo " . $id;
    }

    public static function update()
    {
        echo "Le zoo vient d'être mis à jour.";
    }

    public static function delete(int $id)
    {
        echo "Le zoo " . $id . " vient d'être supprimé.";
    }
}
