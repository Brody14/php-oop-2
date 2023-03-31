<?php

require_once './models/category.php';

$dog = new Category('Cane');
$dog->setIconUrl('./img/dog.png');

var_dump($dog);


$cat = new Category('Gatto');
$cat->setIconUrl('./img/cat.png');

var_dump($cat);


