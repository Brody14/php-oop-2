<?php

require_once __DIR__ . '/models/category.php';
require_once __DIR__ . '/models/food.php';
require_once __DIR__ . '/models/bed.php';
require_once __DIR__ . '/models/toy.php';

//CREO LE CATEGORIE

$dog = new Category();

//var_dump($dog);

$cat = new Category();
$cat->setName('Gatto');
$cat->setIconUrl('./img/cat.png');

//var_dump($cat);

//CREO I PRODOTTI

//CIBO

try {
    $miniAdult = new Food("Mini Adult", "Royal Canin", $dog, number_format(15.00, 2), 5, 'carni e derivati, cereali, oli e grassi, sottoprodotti di origine vegetale, sali minerali, zuccheri.' );
    $miniAdult->setProductCategory(Product::$productCategoryName[0]);
    $miniAdult->setFormat("12 Bustine da 85gr");
    $miniAdult->setDescription('Alimento completo per cani adulti di piccola taglia (tra 1 e 10 kg) - Da 10 mesi a 12 anni di età.');
    $miniAdult->setImageUrl('./img/royalmini.jpg');
    $catMongeTrota = new Food("Monoprotein Cat Sterilised Trota", "Monge Natural Superpremium", $cat, 58.99, 8, 'Trota disidratata, frumento, glutine di granoturco, grassi animali, proteine animali, fibra di piselli, sostanze minerali.');
    $catMongeTrota->setProductCategory(Product::$productCategoryName[1]);
    $catMongeTrota->setFormat('10 kg');
    $catMongeTrota->setDescription('E\' un alimento completo per gatti adulti. Formulato appositamente per il tuo gatto adulto sterilizzato grazie alla presenza di un basso contenuto di grassi** per favorire il mantenimento del peso corporeo ideale.');
    $catMongeTrota->setImageUrl('./img/mongetrota.jpg');

}catch(Exception $e) {
    echo "Errore:" . $e->getMessage();
}


$foods = [];
array_push($foods, $miniAdult, $catMongeTrota);

//var_dump($miniAdult);

//CUCCE
try {
    $dogBed = new Bed('Dreamaway Boston Petit Sofà', 'Fabotex', $dog, 63.99, 2, 'blu', '65x50x20 cm');
    $dogBed->setImageUrl('./img/cucciacane.jpg');
    $dogBed->setProductCategory(Product::$productCategoryName[3]);
    $dogBed->setDescription('Dreamaway Boston Sofà in tessuto poliestere 100% idrorepellente, antigraffio, alta resistenza, completamente sfoderabile con zip, per uso “in & outdoor” con imbottitura 100% poliuretano espanso macinato');
    $catBed = new Bed('Cuccia Igloo Plus', 'Petup', $cat, number_format(38.20, 2), 6, 'blu', '40x40 cm');
    $catBed->setImageUrl('./img/cucciagatto.jpg');
    $catBed->setProductCategory(Product::$productCategoryName[3]);
    $catBed->setDescription('Morbida cuccetta a forma di piramide con cuscino estraibile. Realizzata con tessuto in cotone piu\' resistente.');
}catch(Exception $e) {
    echo "Errore:" . $e->getMessage();
}

$beds = [];
array_push($beds, $dogBed, $catBed);

//var_dump($beds);

//var_dump($dogBed);
//var_dump($catBed);

//GIOCHI
try {

    $dogToy = new Toy('Cotonosso Centro Palla', 'Petup', $dog, 4.49, 8);
    $dogToy->setColor('Verde/Blu');
    $dogToy->setWeight('115 gr');
    $dogToy->setSize('38 cm');
    $dogToy->setImageUrl('./img/giococane.jpg');
    $dogToy->setDescription('Gioco robusto e resistente. Fara\' la felicita\' del tuo cane che potrà divertirsi con questo passatempo in cotone intrecciato.');
    $dogToy->setProductCategory(Product::$productCategoryName[2]);
    $catToy = new Toy('Active-mouse', 'Trixie', $cat, 20.85, 4);
    $catToy->setSize('8 cm');
    $catToy->setImageUrl('./img/giocogatto.jpg');
    $catToy->setDescription('Topolino in peluche con funzionamento a batterie. Stimola l\'istino naturale del gatto a cacciare. Si ferma al contatto e riprende a muoversi se toccato nuovamente.');
    $catToy->setProductCategory(Product::$productCategoryName[2]);
    $catToy->setColor('Grigio');
}catch(Exception $e) {
    echo "Errore:" . $e->getMessage();
}

$toys = [];
array_push($toys, $dogToy, $catToy);

//var_dump($dogToy);



