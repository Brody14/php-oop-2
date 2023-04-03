<?php

trait Color {
    
    protected string $color;

    public function getColor(){
        return ucfirst($this->color);
    }

    public function setColor($newValue){
        $this->color = $newValue;
    }
}