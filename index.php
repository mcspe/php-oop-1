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
        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>
        </div>
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