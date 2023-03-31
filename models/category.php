<?php

class Category {
    protected string $name;
    protected string $iconUrl;

    public function __construct($_name) {
        $this->name = $_name;   
    }

    //SETTER E GETTER

    public function setName($newValue) {
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