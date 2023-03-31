<?php

require_once './models/category.php';
require_once './models/product.php';
require_once './models/food.php';
require_once './models/bed.php';
require_once './models/toy.php';

//CREO LE CATEGORIE

$dog = new Category();

//var_dump($dog);

$cat = new Category();
$cat->setName('Gatto');
$cat->setIconUrl('./img/cat.png');

//var_dump($cat);

$miniAdult = new Food("Mini Adult", "Royal Canin", $dog, 15.00, 5, 'carni e derivati, cereali, oli e grassi, sottoprodotti di origine vegetale, sali minerali, zuccheri.', );
$miniAdult->productCategory = Product::$productCategoryName[0];
$miniAdult->setFormat("12 Bustine da 85gr");
$miniAdult->setDescription('Alimento completo per cani adulti di piccola taglia (tra 1 e 10 kg) - Da 10 mesi a 12 anni di età.');
$miniAdult->setImageUrl('./img/royalmini.jpg');

//var_dump($miniAdult);

$dogBed = new Bed('Dreamaway Boston Petit Sofà', 'Fabotex', $dog, 63.99, 2, 'blu', '65x50x20 cm');
$dogBed->setImageUrl('./img/cucciacane.png');
$dogBed->productCategory = Product::$productCategoryName[3];
$dogBed->setDescription('Dreamaway Boston Sofà in tessuto poliestere 100% idrorepellente, antigraffio, alta resistenza, completamente sfoderabile con zip, per uso “in & outdoor” con imbottitura 100% poliuretano espanso macinato');


$catBed = new Bed('Cuccia Igloo Plus', 'Petup', $cat, 38.20, 6, 'blu', '40x40 cm');
$catBed->setImageUrl('./img/cucciagatto.png');
$catBed->productCategory = Product::$productCategoryName[3];
$catBed->setDescription('Morbida cuccetta a forma di piramide con cuscino estraibile. Realizzata con tessuto in cotone piu\' resistente.');


//var_dump($dogBed);
//var_dump($catBed);

$dogToy = new Toy('Cotonosso Centro Palla', 'Petup', $dog, 4.49, 8);
$dogToy->setColor('Verde/Blu');
$dogToy->setWeight('115 gr');
$dogToy->setSize('38 cm');
$dogToy->setImageUrl('./img/giococane.jpg');
$dogToy->setDescription('Gioco robusto e resistente. Fara\' la felicita\' del tuo cane che potrà divertirsi con questo passatempo in cotone intrecciato.');
$dogToy->productCategory = Product::$productCategoryName[2];

//var_dump($dogToy);



