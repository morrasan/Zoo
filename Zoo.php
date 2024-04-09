<?php

class Zoo {
    private static ?Zoo $instance = null;
    private array $animals = [];

    private function __construct () {}

    private function __clone () {}

    public static function getInstance(): Zoo {
        if (null === static::$instance) {
            static::$instance = new Zoo();
        }
        return static::$instance;
    }

    /**
     * @return array
     */
    public function getAnimals(): array {
        return $this->animals;
    }

    /**
     * @param array $animals
     *
     * @return void
     */
    public function addAnimals (array $animals): void {
        $this->animals = array_merge($this->animals, $animals);
    }

    /**
     * @param Animal $animal
     *
     * @return void
     */
    public function addAnimal (Animal $animal): void {
        $this->animals[] = $animal;
    }
}
