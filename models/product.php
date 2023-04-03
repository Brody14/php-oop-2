<?php

class Product {
    protected string $productName;
    protected string $brand;
    protected Category $category;
    public static $productCategoryName = ['Cibo Umido', 'Cibo Secco', 'Giochi', 'Cucce'];
    protected string $imageUrl;
    protected string $description;
    protected  $price;
    protected int $quantity;

    public function __construct($_productName, $_brand, Category $_category, $_price, $_quantity) {
        $this->productName = $_productName;
        $this->brand = $_brand;
        $this->category = $_category;
        $this->price = $_price;
        $this->quantity = $_quantity;
    }


    //SETTER E GETTER

    public function setProductName($newValue) { 
        $this->productName = trim($newValue);
    }

    public function setBrand($newValue) { 
        $this->brand = trim($newValue);
    }

    public function setDescription($newValue) { 
        $this->description = trim($newValue);
    }

    public function setImageUrl($newValue) { 
        if($newValue == '') {
            $newValue = './img/place.png';
        }
        $this->imageUrl = ($newValue);
    }


    public function setPrice($newValue) {
        if($newValue < 0 || $newValue === null) {
            return;
        }
        $this->price = $newValue;
    }

    public function setQuantity($newValue) {
        if($newValue < 1) {
            echo "Non disponibile";
        }
        
        $this->quantity = trim($newValue);
    }

    public function getProductName() {
        return $this->productName;
    }

    public function getDescription() { 
        return $this->description ;
    }

    public function getPrice() {
        return $this->price ;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getImageUrl() {
        return $this->imageUrl;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getCategory() {
        return $this->category;
    }

}