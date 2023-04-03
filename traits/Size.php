<?php

trait Size {
    
    protected string $size;

    public function getSize() {
        return $this->size;
    }
 
    public function setSize($newValue) {
        $this->size = $newValue;
    }


}