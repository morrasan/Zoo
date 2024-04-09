<?php

trait HasFur {
    public function groom (): void {
        echo "{$this->name} czesze futro.\n";
    }
}
