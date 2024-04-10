<?php

namespace App\Animal\Herbivorous;

class Elephant extends HerbivorousAnimal {
    public function __construct (string $name) {
        $this->type = 'Słoń';
        parent::__construct($name);
    }
}
