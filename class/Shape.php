<?php
abstract class Shape
{
  protected $name;
  const UNIT =" cm";

  abstract public function perimeter();
  abstract public function area();

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function displayPerimeter()
  {
    echo "Le ".$this->name." a un périmètre de ".
    $this->perimeter(). self::UNIT;
  }

  public function displayArea()
  {
    echo "Le ".$this->name." a une aire de ".
    $this->area(). self::UNIT;
  }
}
