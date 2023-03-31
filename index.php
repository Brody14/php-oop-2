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
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card">
                        <img class="m-auto" style="height:200px; width:160px" src="<?= $miniAdult->GetImageUrl(); ?>"/>
                        <div class="card-body">
                            <img style="height:30px" src="<?= $dog->GetIconUrl(); ?>"/>
                            <h6> <?= $dog->getName() . '/' . ' ' . $miniAdult->productCategory?> </h6>
                            <h5 class="card-title"><?= $miniAdult->getBrand() . ' ' . $miniAdult->getProductName(); ?></h5>
                            <p class="card-text"><?= $miniAdult->getDescription(); ?></p>
                            <p><?= $miniAdult->getPrice() . '€';?></p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </main>

    
</body>
</html>
