<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('node_modules/') ?>bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  </head>
  <body>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container">
  <a class="navbar-brand" href="<?= base_url('Home/index') ?>">Image</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li>
        <a class="nav-link text-white" href="#">Paket All In One</a>
      </li>
      <li>
        <a href="<?= base_url('Input/flight') ?>" class="nav-link text-white">Penerbangan</a>
      </li>
      <li>
        <a href="<?= base_url('Input/penginapan') ?>" class="nav-link text-white">Penginapan</a>
      </li>
      <li>
        <a href="<?= base_url('Input/travel') ?>" class="nav-link text-white">Tempat Wisata</a>
      </li>
      <li>
        <a href="<?= base_url('Input/car') ?>" class="nav-link text-white">Mobil</a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">Kereta Api</a>
      </li>
    </ul>
    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
      <a class=" nav-link mr-md-2 text-white" href="<?= base_url('Home/login') ?>" id="bd-versions" aria-haspopup="true" aria-expanded="false">Login</a>
      </li>
      <li>
      <a class="nav-link mr-md-2 text-white" href="<?= base_url('Home/register') ?>" id="bd-versions" aria-haspopup="true" aria-expanded="false">Register</a>
      </li>
  </div>
  </div>
</nav>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>