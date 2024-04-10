<?php

namespace App\Animal;

trait HasFur {
    public function groom (): void {
        echo "{$this->type} {$this->name} czesze futro.\n";
    }
}
