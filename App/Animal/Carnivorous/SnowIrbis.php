<?php

namespace App\Animal\Carnivorous;

use App\Animal\HasFur;

class SnowIrbis extends CarnivorousAnimal {
    use HasFur;

    public function __construct (string $name) {
        $this->type = 'Irbis śnieżny';
        parent::__construct($name);
    }
}
