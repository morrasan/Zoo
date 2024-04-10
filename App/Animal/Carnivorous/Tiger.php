<?php

namespace App\Animal\Carnivorous;

use App\Animal\HasFur;

class Tiger extends CarnivorousAnimal {
    use HasFur;

    public function __construct (string $name) {
        $this->type = 'Tygrys';
        parent::__construct($name);
    }
}
