<?php

namespace App\Controller;

class AnimalController
{

    public static function index()
    {
        echo "La liste de tous les animaux.";
    }

    public static function show(int $id)
    {
        echo "L'animal numéro " . $id;
    }

    public static function create()
    {
        echo "Créer un animal";
    }

    public static function new()
    {
        echo "L'animal vient d'être créé.";
    }

    public static function edit(int $id)
    {
        echo "Modifier l'animal " . $id;
    }

    public static function update()
    {
        echo "L'animal vient d'être mis à jour.";
    }

    public static function delete(int $id)
    {
        echo "L'animal " . $id . " vient d'être supprimé.";
    }
}
