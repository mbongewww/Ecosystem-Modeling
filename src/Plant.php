<?php

require_once 'Entity.php';

class Plant extends Entity {
  public $sunlight;
  public $water;

  public function grow() {
    // Implement growth logic based on sunlight and water
    echo "{$this->name} is growing. (Base implementation)\n";
  }

  public function photosynthesize() {
    echo "{$this->name} is photosynthesizing. (Base implementation)\n";
  }
}
