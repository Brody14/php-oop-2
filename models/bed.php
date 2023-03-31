<?php

require_once './models/product.php';

class Bed extends Product {
    protected string $color;
    public string $productCategory;
    protected string $size;

    public function __construct($_productName, $_brand, $_categoryName, $_price, $_quantity, $_color, $_size) {
        parent::__construct($_productName, $_brand, $_categoryName, $_price, $_quantity);
        $this->color = $_color;
        $this->size = $_size;

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
}