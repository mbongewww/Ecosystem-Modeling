<?php

require_once 'Animal.php';

class Insect extends Animal {
  public $wings;

  public function fly() {
    echo "{$this->name} is flying. (Base implementation)\n";
  }

  public function makeSound() {
    echo "{$this->name} makes an insect sound. (Override base implementation)\n";
  }
}
