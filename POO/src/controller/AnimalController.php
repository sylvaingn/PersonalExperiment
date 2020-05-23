<?php

namespace App\Controller;

class AnimalController extends AbstractController
{

    public static function index()
    {
        echo self::getTwig()->render('animal/index.html');
    }

    
    public static function show($id)
    {
        echo self::getTwig()->render('animal/show.html', [
            'idanimal' => $id
        ]);
    }

    
    public static function create()
    {
        echo self::getTwig()->render('animal/create.html');
    }

    
    public static function new()
    {
        echo self::getTwig()->render('animal/new.html');
    }

    
    public static function edit(int $id)
    {
        echo self::getTwig()->render('animal/edit.html', [
            'idanimal' => $id
        ]);
    }


    public static function update()
    {
        echo self::getTwig()->render('animal/update.html');
    }


    public static function delete(int $id)
    {
        echo self::getTwig()->render('animal/delete.html', [
            'idanimal' => $id
        ]);
    }
}
