<?php

abstract class CarnivorousAnimal extends Animal {

    public function eat (MeatFood $food): CarnivorousAnimal {
        echo "{$this->name} je {$food}.\n";
        return $this;
    }
}
