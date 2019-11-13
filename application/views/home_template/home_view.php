<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>

    <!-- Bootstrap CSS -->
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <!-- <div class="gradient-background">
      </div> -->
  <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active img-fluid position-relative" >
    <img src="<?= base_url('assets/') ?>img/banner1.jpg" class="d-block w-100" height="100%">
    </div>
    <div class="carousel-item img-fluid position-relative">
      <img src="<?= base_url('assets/') ?>img/banner2.jpg" class="d-block w-100" width="100%" height="100%">
    </div>
    <div class="carousel-item img-fluid position-relative">
    <img src="<?= base_url('assets/') ?>img/banner3.jpg" class="d-block w-100" width="100%" height="100%">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section id="features" class="features text-center">
		<div class="container">
			<div class="row">
				
				<div class="col-md-12"></div>
				<div class="col-sm-6 col-md-3">
					<a href="<?= base_url('Input/flight') ?>"><i class="fas fa-paper-plane"></i></a>
						<h3>Pesawat</h3>
				</div>
				<div class="col-sm-6 col-md-3">
					<a href="<?= base_url('Input/travel') ?>"><i class="fas fa-luggage-cart"></i></a>
						<h3>Wisata</h3>
				</div>
				<div class="col-sm-6 col-md-3">
					<a href="<?= base_url('Input/penginapan') ?>"><i class="fas fa-hotel"></i></a>
						<h3>Hotel</h3>
				</div>
				<div class="col-sm-6 col-md-3">
					<a href="<?= base_url('Input/train') ?>"><i class="fas fa-train"></i></a>
						<h3>Kereta Api</h3>
				</div>
			</div>
		</div>
    <br>
    <div class="container">
			<div class="row">
				<div class="col-md-12"></div>
				<div class="col-sm-6 col-md-3">
					<a href="<?= base_url('Input/car') ?>"><i class="fas fa-car"></i></a>
						<h3>Mobil</h3>
				</div>
				<div class="col-sm-6 col-md-3">
					<a href="<?= base_url('Input/bus') ?>"><i class="fas fa-bus"></i></a>
						<h3>Bis</h3>
				</div>
				<div class="col-sm-6 col-md-3">
					<a href="<?= base_url('Input/package') ?>"><i class="fas fa-hand-pointer"></i></a>
						<h3>Pilih Maumu</h3>
				</div>
			</div>
		</div>
	</section>


<!-- <div class="container">
  <div class="row">
    <div class="col-md-2"></div>
      <div class="col-md-8">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
  </div>
</div> -->


<div class="col-md-2"></div>
<div class="container indt-container new-hhd-container pb-5 pt-5">
    <h3 class="mb-3">Destination Highlights</h3>

	<div class="row no-gutters">
        
                <a href="<?= base_url('Destination/malang') ?>" class="col new-hhd col-high-dest" style="display:block;">
              		<div class="new-hhd-card" >
                  <img src="<?= base_url('assets/') ?>img/Malang.jpg" class="d-block w-100" width="100%" height="100%">
                  		<div class="new-hhd-body">Malang</div>
               		</div>
           		</a>
              
                <a href="<?= base_url('Destination/surabaya') ?>" class="col new-hhd col-high-dest" style="display:block;">
              		<div class="new-hhd-card">
                  <img src="<?= base_url('assets/') ?>img/Surabaya.jpg" class="d-block w-100" width="100%" height="100%">
                  		<div class="new-hhd-body">Surabaya</div>
               		</div>
           		</a>
              
                <a href="<?= base_url('Destination/yogyakarta') ?>" class="col new-hhd col-high-dest" style="display:block;">
              		<div class="new-hhd-card" >
                  <img src="<?= base_url('assets/') ?>img/Jogja.jpg" class="d-block w-100" width="100%" height="100%">
                  		<div class="new-hhd-body">Yogyakarta</div>
               		</div>
           		</a>
              
                <a href="<?= base_url('Destination/manado') ?>" class="col new-hhd col-high-dest" style="display:block;">
              		<div class="new-hhd-card" >
                  <img src="<?= base_url('assets/') ?>img/Manado.jpg" class="d-block w-100" width="100%" height="100%">
                  		<div class="new-hhd-body">Manado</div>
               		</div>
           		</a>
                
                <a href="<?= base_url('Destination/ambon') ?>" class="col new-hhd col-high-dest">
              		<div class="new-hhd-card" >
                  <img src="<?= base_url('assets/') ?>img/ambon.jpg" class="d-block w-100" width="100%" height="100%">
                  		<div class="new-hhd-body">Ambon</div>
               		</div>
           		</a>
                
                <a href="#" class="col new-hhd col-high-dest">
              		<div class="new-hhd-card" >
                  <img src="<?= base_url('assets/') ?>img/Medan.jpg" class="d-block w-100" width="100%" height="100%">
                  		<div class="new-hhd-body">Medan</div>
               		</div>
           		</a>
                
                <a href="#" class="col new-hhd col-high-dest">
              		<div class="new-hhd-card" >
                  <img src="<?= base_url('assets/') ?>img/Bandung.jpg" class="d-block w-100" width="100%" height="100%">
                  		<div class="new-hhd-body">Bandung</div>
               		</div>
           		</a>
                
                <a href="#" class="col new-hhd col-high-dest">
              		<div class="new-hhd-card" >
                  <img src="<?= base_url('assets/') ?>img/Jakarta.jpg" class="d-block w-100" width="100%" height="100%">
                  		<div class="new-hhd-body">Jakarta</div>
               		</div>
           		</a>
                
                <a href="#" class="col new-hhd col-high-dest">
              		<div class="new-hhd-card" >
                  <img src="<?= base_url('assets/') ?>img/Lombok.jpg" class="d-block w-100" width="100%" height="100%">
                  		<div class="new-hhd-body">Lombok</div>
               		</div>
           		</a>
                
                <a href="#" class="col new-hhd col-high-dest">
              		<div class="new-hhd-card" >
                  <img src="<?= base_url('assets/') ?>img/Bali.jpg" class="d-block w-100" width="100%" height="100%">
                  		<div class="new-hhd-body">Bali</div>
               		</div>
           		</a>
          
    </div>
</div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
