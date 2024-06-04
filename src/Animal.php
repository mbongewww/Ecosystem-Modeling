<?php

require_once 'Entity.php';

class Animal extends Entity {
  public $diet;

  public function eat(Entity $entity) {
    if ($entity instanceof Animal && $entity->diet !== $this->diet) {
      echo "{$this->name} cannot eat {$entity->name}.\n";
    } else {
      echo "{$this->name} is eating {$entity->name}.\n";
      // Update entity states (health, etc.) based on eating logic
    }
  }

  public function makeSound() {
    echo "{$this->name} makes a sound. (Base implementation)\n";
  }
}
