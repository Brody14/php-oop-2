<?php

require_once './db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <header>
        <div class="container text-center py-4">
            <h1>I nostri prodotti</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card p-2" style="height:500px">
                        <img class="m-auto" style="height:200px; width:200px" src="<?= $miniAdult->GetImageUrl(); ?>"/>
                        <div class="card-body">
                            <div class="d-flex mb-3 align-items-center">
                                <img class="me-2" style="height:30px" src="<?= $dog->GetIconUrl(); ?>"/>
                                <h6 class="m-0"> <?= $dog->getName() . '/' . ' ' . $miniAdult->productCategory?> </h6>
                            </div>
                            <h5 class="card-title"><?= $miniAdult->getBrand() . ' ' . $miniAdult->getProductName(); ?></h5>
                            <p class="card-text"><?= $miniAdult->getDescription(); ?></p>
                            <ul class="p-0 list-unstyled">
                                <li>Prezzo: <strong><?= $miniAdult->getPrice() . '€';?></strong></li>
                                <li><?= $miniAdult->getIngredient();?></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card  p-2" style="height:500px">
                        <img class="m-auto" style="height:200px; width:200px" src="<?= $dogToy->GetImageUrl(); ?>"/>
                        <div class="card-body">
                            <div class="d-flex mb-3  align-items-center">
                                <img class="me-2" style="height:30px" src="<?= $dog->GetIconUrl(); ?>"/>
                                <h6 class="m-0"> <?= $dog->getName() . '/' . ' ' . $dogToy->productCategory?> </h6>
                            </div>
                            <h5 class="card-title"><?= $dogToy->getBrand() . ' ' . $dogToy->getProductName(); ?></h5>
                            <p class="card-text"><?= $dogToy->getDescription(); ?></p>
                            <ul class="p-0 list-unstyled">
                                <li>Prezzo: <strong><?= $dogToy->getPrice() . '€';?></strong></li>
                                <li>Colore: <?= $dogToy->getColor();?></li>
                                <li>Dimensione: <?= $dogToy->getSize();?></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card  p-2" style="height:500px">
                        <img class="m-auto" style="height:200px; width:200px" src="<?= $catBed->GetImageUrl(); ?>"/>
                        <div class="card-body">
                            <div class="d-flex mb-3 align-items-center">
                                <img class="me-2" style="height:30px" src="<?= $cat->GetIconUrl(); ?>"/>
                                <h6 class="m-0"> <?= $cat->getName() . '/' . ' ' . $catBed->productCategory?> </h6>
                            </div>
                            <h5 class="card-title"><?= $catBed->getBrand() . ' ' . $catBed->getProductName(); ?></h5>
                            <p class="card-text"><?= $catBed->getDescription(); ?></p>
                            <ul class="p-0 list-unstyled">
                                <li>Prezzo: <strong><?= $catBed->getPrice() . '€';?></strong></li>
                                <li>Colore: <?= $catBed->getColor();?></li>
                                <li>Dimensione: <?= $catBed->getSize();?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </main>

    
</body>
</html>
