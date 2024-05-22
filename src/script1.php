<?php

/* Daclaring variables */
$name = "Aldair";
$age = 25;
$married = FALSE;
$hobbies = array("Coding", "Game", "Books");

class Car
{
  public $color;
  public $model;
  public function __construct($color, $model)
  {
    $this->color = $color;
    $this->model = $model;
  }
  public function message()
  {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("Red", "Volvo");
$myCar = new Car("Black", "BMW");

echo $myCar->color;

