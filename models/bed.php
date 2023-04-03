<?php

require_once __DIR__ . '/../models/product.php';
require_once __DIR__ . '/../traits/ProductCategory.php';
require_once __DIR__ . '/../traits/Color.php';
require_once __DIR__ . '/../traits/Size.php';


class Bed extends Product {
    use ProductCategory, Color, Size;

    public function __construct($_productName, $_brand, Category $_category, $_price, $_quantity, $_color, $_size) {
        parent::__construct($_productName, $_brand, $_category, $_price, $_quantity);
        $this->setColor($_color);
        $this->setSize($_size);

    }

    public function printHtml() {
        ?>
        <div class="col-4">
            <div class="card  p-2 mb-3" style="height:600px">
                <img class="m-auto" style="height:200px; width:200px" src="<?= $this->GetImageUrl(); ?>"/>
                <div class="card-body">
                    <div class="d-flex mb-3 align-items-center">
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