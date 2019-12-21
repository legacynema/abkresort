<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Detail Paket</title>
</head>

<body>
  <div class="container">
    <div class="slideshow aem-GridColumn aem-GridColumn--default--12">
      <!-- Slideshow -->

      <div class="slideshow-image full-width">


      <form action="<?php echo base_url("Input/detail/$paketW->id") ?>" name="form" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
        <div style="position:relative">
          <img src="<?php echo base_url('foto/admin/paketWisata/' . $paketW->foto) ?>" class="d-block w-100" height="100%" alt="Slideshow">
        </div>


      </div>

      <!-- End of Slideshow -->

    </div>

    <div class="col-md-8">
      <br><br>
      <h1><?= $paketW->nama_paket ?></h1>
      <hr>

      <br>

    </div>
    </form>
    <br><br>

    <div class="accordion" id="accordionExample">
      <div class="card bg-dark">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn text-light" href="#" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Deskripsi Paket
            </button>
          </h2>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body text-light">
            <?= $paketW->deskripsi?>
          </div>
        </div>
      </div>
      <div class="card bg-dark">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn text-light collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Harga Paket
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body text-light">
          <a class="font-weight-bold text-light">Harga : <a class="text-light"><?= number_format($paketW->harga) ?></a></a>
          <div class="col-md-3">
              <button type="button" class="btn btn-light">Pesan Sekarang</button>
            </div>
          </div>
        </div>
      </div>
      <div class="card bg-dark">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn text-light collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Sistem Pembayaran
            </button>
          </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body text-light">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
    </div>


    <div class="col-md-4"></div>
  </div>
</body>

</html>