<?php

namespace App\Animal\Herbivorous;

class Rhinoceros extends HerbivorousAnimal {
    public function __construct (string $name) {
        $this->type = 'Nosorożec';
        parent::__construct($name);
    }
}
