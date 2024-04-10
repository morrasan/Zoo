<?php

use App\Animal\Carnivorous\SnowIrbis;
use App\Animal\Carnivorous\Tiger;
use App\Animal\Herbivorous\Elephant;
use App\Animal\Herbivorous\Rabbit;
use App\Animal\Herbivorous\Rhinoceros;
use App\Animal\Omnivorous\Fox;
use App\Food\MeatFood;
use App\Food\PlantFood;
use App\Zoo;

require_once 'autoloader.php';

echo "\n### Zoo ###\n\n";

$tiger      = new Tiger("Tygrys Szerchan");
$snowIrbis  = new SnowIrbis("Irbis Śnieżek");
$elephant   = new Elephant("Słoń Dabmo");
$fox        = new Fox("Lis Mykyta");
$rhinoceros = new Rhinoceros("Nosorożec Duke");
$rabbit     = new Rabbit("Królik Truskawek");

$zoo = Zoo::getInstance();
$zoo->addAnimals([$tiger, $snowIrbis, $elephant, $fox, $rhinoceros]);
$zoo->addAnimal($rabbit);

foreach ($zoo->getAnimals() as $animal) {
    echo $animal;
}

echo "\n^^^  Karmienie zwierząt ^^^\n\n";

$meatFood = new MeatFood();
$plantFood = new PlantFood();

$tiger->eat($meatFood);
$elephant->eat($plantFood);
$fox->eat($meatFood)->eat($plantFood);
$rabbit->eat($plantFood);

echo "\n^^^  Pielęgnacja zwierząt ^^^\n\n";

$fox->groom();
$rabbit->groom();
