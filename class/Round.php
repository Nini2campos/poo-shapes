<?php

class Round extends Shape
{
  private $ray;

  public function __construct($ray,$name)
  {
    $this->ray=$ray;
    parent::__construct($name);
  }

  public function perimeter ()
  {
    return 2 * pi() * $this->ray;
  }
  public function area()
  {
    return pi() * ($this->ray * $this->ray);
  }

}
