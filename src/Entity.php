<?php

class Entity {
  public $id;
  public $name;
  public $isAlive = true;

  public function __construct($name) {
    $this->name = $name;
  }

  public function breathe() {
    // Implement breathing logic (optional for some entities)
    echo "{$this->name} is breathing. (Base implementation)\n";
  }
}
