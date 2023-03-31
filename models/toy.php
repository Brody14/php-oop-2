<?php

require_once './models/product.php';

class Toy extends Product {
    protected string $color;
    public string $productCategory;
    protected string $size;
    protected string $weight;

    public function __construct($_productName, $_brand, $_categoryName, $_price, $_quantity) {
        parent::__construct($_productName, $_brand, $_categoryName, $_price, $_quantity);
    }

    public function setColor($newValue) {
        if($newValue == '') {
            echo "Informazione non disponibile";
        }
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
}