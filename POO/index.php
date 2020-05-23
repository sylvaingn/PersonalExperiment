<?php

require __DIR__."/config/config.php";



$girafe = new Animal;

$girafe->setSpecies("Girafe");
var_dump($girafe->getSpecies());

