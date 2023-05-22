<?php

  require_once __DIR__ . '/models/Movie.php';

  $movieDB = [];

  $res = json_decode(file_get_contents('https://api.themoviedb.org/3/trending/movie/week?api_key=4f166f04fc497eef28ad33fc0f0aceac'), true)['results'];
  // var_dump($res);

  foreach ($res as $result) {
    // var_dump($result);
    $id = $result['id'];
    $movieInfo = json_decode(file_get_contents("https://api.themoviedb.org/3/movie/$id?api_key=4f166f04fc497eef28ad33fc0f0aceac"), true);
    // var_dump($movieInfo);
    $genres = [];
    foreach ($movieInfo['genres'] as $genre) {
      $genres[] = $genre['name'];
      // var_dump($genre['name']);
    }
    $movieDB[] = new Movie($movieInfo['original_title'], $genres, $movieInfo['backdrop_path'], $movieInfo['overview'], $movieInfo['homepage']);
  }

  // var_dump($movieDB); 
  // var_dump($movieDB); 