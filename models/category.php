<?php

class Category {
    protected string $name = "Cane";
    protected string $iconUrl = './img/dog.png';

    //SETTER E GETTER

    public function setName($newValue) {
        if($newValue == "Gatto") 
            $this->name = $newValue;
        
    }

    public function setIconUrl($newValue) {
        $this->iconUrl = $newValue;
    }

    public function getName() {
        return $this->name;
    }

    public function getIconUrl() {
        return $this->iconUrl;
    }

}