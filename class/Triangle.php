<?php

class Triangle extends Shape
{
  private $hauteur;
  private $base;
  private $diagonale;

  public function __construct($hauteur, $base, $diagonale,$name)
  {
    $this->hauteur = $hauteur;
    $this->base = $base;
    $this->diagonale = $diagonale;
    parent::__construct($name);
  }

  public function perimeter()
  {
    return $this->hauteur + $this->base + $this->diagonale;
  }

  public function area()
  {
    return 0.5 * ($this->base * $this->hauteur);
  }

}



























 ?>
