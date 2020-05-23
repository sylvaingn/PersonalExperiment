<?php

namespace App\Controller;

class ZooController extends AbstractController
{

    public static function index()
    {
        echo self::getTwig()->render('zoo/index.html');
    }

    public static function show(int $id)
    {
        echo self::getTwig()->render('zoo/show.html', [
            'idzoo' => $id
        ]);
    }

    public static function create()
    {
        echo self::getTwig()->render('zoo/create.html');
    }

    public static function new()
    {
        echo self::getTwig()->render('zoo/new.html');
    }

    public static function edit(int $id)
    {
        echo self::getTwig()->render('zoo/edit.html', [
            'idzoo' => $id
        ]);
    }

    public static function update()
    {
        echo self::getTwig()->render('zoo/update.html');
    }

    public static function delete(int $id)
    {
        echo self::getTwig()->render('zoo/delete.html', [
            'idzoo' => $id
        ]);
    }
}
