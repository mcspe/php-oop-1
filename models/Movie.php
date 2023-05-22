<?php
class Movie {
  public $title;
  public $genres;
  public $href;
  public $overview;
  public $homepage;

  function __construct($_title, $_genres, $_href, $_overview, $_homepage = null) {
    $this->title = $_title;
    $this->genres = $_genres;
    $this->href = $_href;
    $this->overview = $_overview;
    $this->homepage = $_homepage;
  }

  public function getImage() {
    return "https://image.tmdb.org/t/p/original$this->href";
  }
}
