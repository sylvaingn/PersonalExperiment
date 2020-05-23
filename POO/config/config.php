<?php

const FOLDERS = [
    'controllers',
    'models'
];

spl_autoload_register(function ($class) {

    foreach(FOLDERS as $folder) {
        $file =  __DIR__ . '/../src/'. $folder .'/' . $class . '.php';

        if (file_exists($file)) {
                include $file;
        }
    }
});
