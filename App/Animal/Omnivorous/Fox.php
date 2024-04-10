<?php

namespace App\Animal\Omnivorous;

use App\Animal\HasFur;

class Fox extends OmnivorousAnimal {
    use HasFur;

    public function __construct (string $name) {
        $this->type = 'Lis';
        parent::__construct($name);
    }
}
