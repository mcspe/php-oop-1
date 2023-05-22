<?php
  require_once __DIR__ . '/DB.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- FAVICON -->
  <link rel="shortcut icon" href="img/favicon.ico">
  <!-- BOOTSTRAP -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <title>MovieDB</title>
</head>
<body>

  <header>
    <nav class="navbar bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">Navbar</a>
      </div>
    </nav>
  </header>

  <main>
    <div class="container text-center my-5">
      <div class="d-flex justify-content-center flex-wrap gap-5">
        <?php foreach ($movieDB as $movie) : ?>
          <div class="card" style="width: 18rem;">
            <img src="<?php echo $movie->getImage()?>" class="card-img-top" alt="<?php echo $movie->title?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $movie->title?></h5>
              <p class="card-text"><?php echo $movie->overview?></p>
            </div>
            <ul class="list-group list-group-horizontal list-group-flush mx-auto flex-wrap gap-1">
              <?php foreach ($movie->genres as $genre) : ?>
                <li class="list-group-item"><span class="badge rounded-pill text-bg-secondary"><?php echo $genre?></span></li>
              <?php endforeach ?>
            </ul>
            <div class="card-body d-flex justify-content-center align-items-center">
              <?php if ($movie->homepage === '') :?>
                <span> - </span>
              <?php else: ?>
                <a href="<?php echo $movie->homepage ?>" class="card-link"><?php echo $movie->title?></a>
              <?php endif ?>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </main>
  
  <footer class="fixed-bottom">
    <div class="container-fluid bg-dark text-center text-white py-3">
      <span>Credits </span>
      <a href="https://github.com/mcspe" class="text-decoration-none">@mcspe</a>
    </div>
  </footer>

</body>
</html>