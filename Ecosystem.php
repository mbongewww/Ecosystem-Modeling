<?php

require_once 'src/Entity.php';
require_once 'src/Animal.php';
require_once 'src/Plant.php';
require_once 'src/Insect.php';

class Ecosystem {
  private $entities = [];

  public function addEntity(Entity $entity) {
    $this->entities[] = $entity;
  }

  public function simulateTurn() {
    foreach ($this->entities as $entity) {
      if ($entity->isAlive) {
        // Actions based on entity type
        if ($entity instanceof Animal) {
          $entity->eat($this->getRandomEntity());
          $entity->makeSound();
        } else if ($entity instanceof Plant) {
          $entity->grow();
          $entity->photosynthesize();
        } else if ($entity instanceof Insect) {
          $entity->fly();
          $entity->makeSound();
        }
        // Update entity state based on interactions and environment
      }
    }
  }

  private function getRandomEntity() {
    $randomIndex = array_rand($this->entities);
    return $this->entities[$randomIndex];
  }
}
