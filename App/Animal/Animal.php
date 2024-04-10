<?php

namespace App\Animal;

abstract class Animal {
    public string $name;
    public string $type = 'Zwierzę';

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function __toString (): string {
        return sprintf("%s %s\n", $this->type, $this->name);
    }
}
