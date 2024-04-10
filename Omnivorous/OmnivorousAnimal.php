<?php

namespace Omnivorous;

use Animal;
use MeatFood;
use PlantFood;

abstract class OmnivorousAnimal extends Animal {

    public function eat (MeatFood | PlantFood $food): OmnivorousAnimal {
        echo "{$this->name} je {$food}.\n";
        return $this;
    }
}
