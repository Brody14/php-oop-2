<?php

require_once './models/category.php';
require_once './models/product.php';
require_once './models/food.php';

//CREO LE CATEGORIE

$dog = new Category();


var_dump($dog);

$cat = new Category();
$cat->setName('Gatto');
$cat->setIconUrl('./img/cat.png');

var_dump($cat);

$miniAdult = new Food("Mini Adult", "Royal Canin", $dog, 15.00, 5, 'carni e derivati, cereali, oli e grassi, sottoprodotti di origine vegetale, sali minerali, zuccheri.', );
$miniAdult->productCategory = Product::$productCategoryName[0];
$miniAdult->setFormat("12 Bustine da 85gr");
$miniAdult->setDescription('Alimento completo per cani adulti di piccola taglia (tra 1 e 10 kg) - Da 10 mesi a 12 anni di età.');
$miniAdult->setImageUrl('./img/royalmini.jpg');

var_dump($miniAdult);


