<?php

class Movie
{
    private $name = 'Nom a la con';
    private $desc = 'Description a la con';
    private $duration = 120;
    private $release =  'un jour certain';
    
    public function __construct($name = "")
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
      public function setName($name = "")
    {
        $this->name = $name;
    }
  
    public function Affiche()
    {
        echo "$this->name , $this->desc, $this->duration, $this->release";
    }
    
    
}

$movie1 = new Movie;
//echo $movie1-> getName();
$movie1-> Affiche();


