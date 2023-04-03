<?php

trait ProductCategory {
    
    protected string $productCategory;

    public function getProductCategory(){
        return $this->productCategory;
    }

    public function setProductCategory($newValue){
        $this->productCategory = $newValue;
    }
}