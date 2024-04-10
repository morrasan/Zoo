<?php

namespace App\Animal;

trait HasFur {
    public function groom (): void {
        echo "{$this->name} czesze futro.\n";
    }
}
