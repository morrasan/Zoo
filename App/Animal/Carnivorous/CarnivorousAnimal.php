<?php

namespace App\Animal\Carnivorous;

use App\Animal\Animal;
use App\Food\MeatFood;

abstract class CarnivorousAnimal extends Animal {

    public function eat (MeatFood $food): CarnivorousAnimal {
        echo "{$this->name} je {$food}.\n";
        return $this;
    }
}
