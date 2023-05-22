<?php
class Movie {
  public $title;
  public $genre;
  public $href;
  public $overview;
  public $homepage;

  function __construct($_title, $_genre, $_href, $_overview, $_homepage = null) {
    $title = $_title;
    $genre = $_genre;
    $href = $_href;
    $overview = $_overview;
    $homepage = $_homepage;
  }
}
