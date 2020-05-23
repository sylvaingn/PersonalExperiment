<?php

namespace App\Controller;

class AnimalZooController extends AbstractController
{

    public static function index()
    {
        echo self::getTwig()->render('animal_zoo/index.html');
    }

    public static function show(int $id)
    {
        echo self::getTwig()->render('animal_zoo/show.html', [
            'idanimal_zoo' => $id
        ]);
    }

    public static function create()
    {
        echo self::getTwig()->render('animal_zoo/create.html');
    }

    public static function new()
    {
        echo self::getTwig()->render('animal_zoo/new.html');
        var_dump($_POST);

    }

    public static function edit(int $id)
    {
        echo self::getTwig()->render('animal_zoo/edit.html', [
            'idanimal_zoo' => $id
        ]);
    }

    public static function update()
    {
        echo self::getTwig()->render('animal_zoo/update.html');
    }

    public static function delete(int $id)
    {
        echo self::getTwig()->render('animal_zoo/delete.html', [
            'idanimal_zoo' => $id
        ]);
    }
}
