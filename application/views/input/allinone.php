<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('node_modules/') ?>bootstrap/dist/css/bootstrap.css">
    <title>All In One</title>
</head>

<body>

    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12  ">
        <div class="slideshow aem-GridColumn aem-GridColumn--default--12">
            <!-- Slideshow -->
            <div class="slideshow-image full-width">
                <div style="position:relative">
                    <img src="<?= base_url('assets/') ?>img/allinone.jpg" class="d-block w-100" height="100%" alt="Slideshow">
                </div>
    </div>
    <!-- End of Slideshow -->
    </div>
</div>
<div class="container mt-5">
   <div class="jumbotron jumbotron-fluid bg-primary">
   <h1 class="text-center" style="font-family:Helvetica Neue">Choose your Want</h1>
    <form action="">
        <div class="form-row row container">
            <div class="col-md-5">
                <div class="form-group form-check">
                    <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input styled-checkbox" id="mobil">
                    <label class="custom-control-label" for="mobil"  data-toggle="collapse" href="#mobil">Mobil</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="pesawat">
                    <label class="custom-control-label" for="pesawat" data-toggle="collapse" href="#pesawat">Pesawat</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="bis">
                    <label class="custom-control-label" for="bis" data-toggle="collapse" href="#bis">Bis</label>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="kereta">
                    <label class="custom-control-label" for="kereta" data-toggle="collapse" href="#kereta" >Kereta</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="hotel">
                    <label class="custom-control-label" for="hotel" data-toggle="collapse" href="#hotel">hotel</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="wisata">
                    <label class="custom-control-label" for="wisata" data-toggle="collapse" href="#wisata">Wisata</label>
                    </div>
                </div>
            </div>
            <div class="col">
                 <div class="form-group">
                 <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="lain_lain">
                    <label class="custom-control-label" for="lain_lain" data-toggle="collapse" href="#lainlain" >Lain-Lain</label>
                    </div>
                 </div>   
            </div>
            </div>
            <!-- End of Slideshow -->
        </div>
    </form>
    <!-- Collapse bis -->
    <div class="collapse" id="bis">
        <div class="card card-body">    
            <div class="container">
            <form>
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="#">Kota Keberangkatan</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="#">Kota Tujuan</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="#">Pilih Tanggal</label>
                        <input type="date" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Check-in" aria-describedby="basic-addon1">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End Collapse bis -->
        <!-- Collapse Wisata -->
        <div class="collapse" id="wisata">
          <div class="card card-body">
          <div class="container">
                <form>
                <div class="form-row">
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="#">Tujuan</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="#">Dari</label>
                        <input type="date" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Check-in" aria-describedby="basic-addon1">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="#">Hingga</label>
                        <input type="date" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Check-in" aria-describedby="basic-addon1">
                    </div>
                </div>
                </form>
            </div>  
          </div> 
        </div>  
        <!-- End Collapse Wisata -->

        <!-- Collapse pesawat -->
        <div class="collapse" id="pesawat">
          <div class="card card-body">
            <div class="container">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-5">
                    <label for="#">Form</label>
                    <input type="text" class="form-control" id="" placeholder="#">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="#">To</label>
                    <input type="text" class="form-control" id="" placeholder="#">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Stasiun Tujuan</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Stasiun Pasar Senen">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="inputState">Dewasa</label>
                    <select id="inputState" class="form-control">
                        <option selected>0 Anak-Anak</option>
                        <option>1 Anak-Anak</option>
                        <option>2 Anak-Anak</option>
                        <option>3 Anak-Anak</option>
                        <option>4 Anak-Anak</option>
                    </select>
                </div>
                <div class="form-group col-md-3"> 
                    <label for="inputState">Anak-Anak</label>
                    <select id="inputState" class="form-control">
                        <option selected>0 Anak-Anak</option>
                        <option>1 Anak-Anak</option>
                        <option>2 Anak-Anak</option>
                        <option>3 Anak-Anak</option>
                        <option>4 Anak-Anak</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputState">Bayi</label>
                    <select id="inputState" class="form-control">
                        <option selected>0 Bayi</option>
                        <option>1 Bayi</option>
                        <option>2 Bayi</option>
                        <option>3 Bayi</option>
                        <option>4 Bayi</option>
                    </select>
                </div>
                <div class="form-group col-md-9">
                    <label for="#">Class</label>
                    <select id="inputState" class="form-control">
                        <option selected>Economy class</option>
                        <option>Bussines class</option>
                        <option>First class</option>
                    </select>                
                </div>
             </div>
            </form>    
          </div>
        </div>
    </div>
        <!-- End Collapse Pesawat -->

        <!-- Collapse All in one Hotel -->
        <div class="collapse" id="hotel">
          <div class="card card-body">
            <div class="container">
             <form>
                <div class="form-row">
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="#">Nama Hotel</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            Tempat Wisata
                        </button>
                    </h2>
                </div>

                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </form>
            </div>
          </div>
        </div>
        <!-- End Collapse Hotel -->
        
        <!-- collapse mobil -->
        <div class="collapse" id="mobil">
          <div class="card card-body">
          <div class="container">
                <form>
                <div class="form-row">
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="#">Pengambilan</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="#">Tanggal Pengambilan</label>
                        <input type="date" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Check-in" aria-describedby="basic-addon1">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="#">Check Pengembalian</label>
                        <input type="date" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Check-in" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
          </div>
        </div>
        <!-- End Collapse Mobil -->

        <!-- Collapse Kereta Api -->
        <div class="collapse" id="kereta">
          <div class="card card-body">
          <div class="container">
                <form action="">
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="#">Form</label>
                        <input type="text" class="form-control" id="" placeholder="#">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="#">To</label>
                        <input type="text" class="form-control" id="" placeholder="#">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputState">Dewasa</label>
                    <select id="inputState" class="form-control">
                        <option selected>0 Anak-Anak</option>
                        <option>1 Anak-Anak</option>
                        <option>2 Anak-Anak</option>
                        <option>3 Anak-Anak</option>
                        <option>4 Anak-Anak</option>
                    </select>
                </div>
                <div class="form-group col-md-5"> 
                    <label for="inputState">Anak-Anak</label>
                    <select id="inputState" class="form-control">
                        <option selected>0 Anak-Anak</option>
                        <option>1 Anak-Anak</option>
                        <option>2 Anak-Anak</option>
                        <option>3 Anak-Anak</option>
                        <option>4 Anak-Anak</option>
                    </select>
                </div>
                    <div class="form-group col-md-9">
                        <div class="form-group">
                            <label for="#">Depart</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                    </div>
            </form>
            </div>        
          </div>
        </div>
        <!-- End Collapse Train -->
    </div> 
</body>

</html>