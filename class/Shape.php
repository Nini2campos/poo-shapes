<?php
abstract class Shape
{
  protected $name;
  const UNIT ="cm";

  abstract public function perimeter();
  abstract public function area();

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function displayPerimeter($unit='cm')
  {
    if($unit==='mm'){

      $perimeter =$this->perimeterToMm();
    }
    else{

      $perimeter= $this->perimeter();
    }

    echo "Le ".$this->name." a un périmètre de ".
    $perimeter. $unit;
  }

  public function displayArea($unit='cm')
  {
    if($unit==='mm'){

      $area =$this->areaToMm();
    }
    else {
      $area= $this->area();

    }
    echo "Le ".$this->name." a une aire de ".
    $area. $unit;
  }
  public function areaToMm()
    {
      return $this->area() * 10;
    }
    public function perimeterToMm()
    {
      return $this->perimeter() * 10;
    }
  }
