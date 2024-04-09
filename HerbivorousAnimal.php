<?php

abstract class HerbivorousAnimal extends Animal {

    public function eat (PlantFood $food): HerbivorousAnimal {
        echo "{$this->name} je {$food}.\n";
        return $this;
    }
}
