<?php

namespace App\Animal\Herbivorous;

use App\Animal\HasFur;

class Rabbit extends HerbivorousAnimal {
    use HasFur;

    public function __construct (string $name) {
        $this->type = 'Królik';
        parent::__construct($name);
    }
}
