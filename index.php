<?php

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
