<?php

namespace App\Animal\Omnivorous;

use App\Animal\Animal;
use App\Food\MeatFood;
use App\Food\PlantFood;

abstract class OmnivorousAnimal extends Animal {

    public function eat (MeatFood | PlantFood $food): OmnivorousAnimal {
        echo "{$this->name} je {$food}.\n";
        return $this;
    }
}
