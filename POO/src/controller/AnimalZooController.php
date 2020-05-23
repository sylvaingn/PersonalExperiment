<?php

namespace App\Controller;

class AnimalZooController
{

    public static function index()
    {
        echo "La liste de tous les animaux_zoos.";
    }

    public static function show(int $id)
    {
        echo "L'animal_zoo numéro " . $id;
    }

    public static function create()
    {
        echo "Créer un animal_zoo";
    }

    public static function new()
    {
        echo "L'animal_zoo vient d'être créé.";
    }

    public static function edit(int $id)
    {
        echo "Modifier l'animal_zoo " . $id;
    }

    public static function update()
    {
        echo "L'animal_zoo vient d'être mis à jour.";
    }

    public static function delete(int $id)
    {
        echo "L'animal_zoo " . $id . " vient d'être supprimé.";
    }
}
