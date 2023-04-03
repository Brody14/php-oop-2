<?php

require_once './models/product.php';

class Toy extends Product {
    protected string $color;
    public string $productCategory;
    protected string $size;
    protected string $weight;

    public function __construct($_productName, $_brand, Category $_category, $_price, $_quantity) {
        parent::__construct($_productName, $_brand, $_category, $_price, $_quantity);
    }

    public function setColor($newValue) {
        $this->color = $newValue;
    }

    public function getColor() {
        return $this->color;
    }

    public function setSize($newValue) {
        $this->size = $newValue;
    }

    public function getSize() {
        return $this->size;
    }

    public function setWeight($newValue) {
        $this->weight = $newValue;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function printHtml() {
        ?>
        <div class="col-4">
            <div class="card  p-2 mb-3" style="height:600px">
                <img class="m-auto" style="height:200px; width:200px" src="<?= $this->GetImageUrl(); ?>"/>
                <div class="card-body">
                    <div class="d-flex mb-3  align-items-center">
                        <img class="me-2" style="height:30px" src="<?= $this->getCategory()->GetIconUrl(); ?>"/>
                        <h6 class="m-0"> <?= $this->getCategory()->getName() . '/' . ' ' . $this->productCategory?> </h6>
                    </div>
                    <h5 class="card-title"><?= $this->getBrand() . ' ' . $this->getProductName(); ?></h5>
                    <p class="card-text"><?= $this->getDescription(); ?></p>
                    <ul class="p-0 list-unstyled">
                        <li>Prezzo: <strong><?= $this->getPrice() . '€';?></strong></li>
                        <li>Colore: <?= $this->getColor();?></li>
                        <li>Dimensione: <?= $this->getSize();?></li>
                    </ul>
                </div>
            </div>

        </div>
        <?php
    }
}