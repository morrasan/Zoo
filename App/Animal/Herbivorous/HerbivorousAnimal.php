<?php

namespace App\Animal\Herbivorous;

use App\Animal\Animal;
use App\Food\PlantFood;

abstract class HerbivorousAnimal extends Animal {

    public function eat (PlantFood $food): HerbivorousAnimal {
        echo "{$this->type} {$this->name} je {$food}.\n";
        return $this;
    }
}
