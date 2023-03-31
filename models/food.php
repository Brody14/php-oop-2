<?php

require_once './models/product.php';

class Food extends Product {
    protected string $ingredients;
    public string $productCategory;
    protected string $format;

    public function __construct($_productName, $_brand, $_categoryName, $_price, $_quantity, $_ingredients) {
        parent::__construct($_productName, $_brand, $_categoryName, $_price, $_quantity);
        $this->ingredients = $_ingredients;
    }

    public function setIngredients($newValue) {
        if($newValue == '') {
            echo "Nessuna informazione disponibile";
        }
        $this->ingredients = $newValue;
    }

    public function getIngredient() {
        return 'Ingredienti: ' . $this->ingredients;
    }

    public function setFormat($newValue) {
        $this->format = $newValue;
    }

    public function getFormat() {
        return $this->format;
    }
}