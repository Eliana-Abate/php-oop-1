<?php 

class Movies
{
  public $title;
  public $genre;
  public $plot;
  public $producer;
  public $year;


    public function __construct($_title, $_genre,  $_plot, $_producer, $_year)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->plot = $_plot;
        $this->producer = $_producer;
        $this->year = $_year;
    }
}

