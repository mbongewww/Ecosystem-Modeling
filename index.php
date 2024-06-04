<?php

require_once 'Ecosystem.php';
require_once 'src/Animal.php';
require_once 'src/Plant.php';
require_once 'src/Insect.php';

$ecosystem = new Ecosystem();

// Add some entities to the ecosystem
$ecosystem->addEntity(new Animal('Lion', 'Carnivore'));
$ecosystem->addEntity(new Animal('Zebra', 'Herbivore'));
$ecosystem->addEntity(new Plant('Grass'));
$ecosystem->addEntity(new Insect('Bee'));

// Simulate a few turns
for ($i = 0; $i < 5; $i++) {
  echo "<div style='padding: 10px;'>\n--- Turn " . ($i + 1) . " ---\n</div>";
  $ecosystem->simulateTurn();
  echo "<hr>";
}
