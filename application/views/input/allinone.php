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
    <br>
    <div class="container ">
        <div class="jumbotron jumbotron-fluid bg-success">
        <h1 class="text-center" style="font-family:Helvetica Neue">Choose your Want</h1>
        <div class="row container">
                <div class="col-md-5">
                   <div class="form-check"> 
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input form-check-input" data-toggle='collapse' data-target='#collapsediv1' id="train">
                        <label class="custom-control-label" for="train">Kereta Api</label>
                    </div>
                   </div>
                   <div class="form-check"> 
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input form-check-input" data-toggle='collapse' data-target='#collapsediv2' id="plane">
                        <label class="custom-control-label" for="plane">Pesawat</label>
                    </div>
                   </div>
                   <div class="form-check"> 
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" data-toggle='collapse' data-target='#collapsediv3' id="car">
                        <label class="custom-control-label" for="car">Mobil</label>
                    </div>
                   </div>
                </div>
                <div class="col-md-5">
                   <div class="form-check"> 
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" data-toggle='collapse' data-target='#collapsediv4' id="hotel">
                        <label class="custom-control-label" for="hotel" >Hotel</label>
                    </div>
                   </div> 
                   <div class="form-check">    
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" data-toggle='collapse' data-target='#collapsediv5' id="wisata">
                        <label class="custom-control-label" for="wisata">Tujuan Wisata</label>
                    </div>
                   </div>
                   <div class="form-check"> 
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" data-toggle='collapse' data-target='#collapsediv1' id="other">
                        <label class="custom-control-label" for="other">Lain-Lain</label>
                    </div>
                   </div>                   
                </div>
            </div>
    </div>

    <!-- Collapse Kereta Api -->
    <div id='collapsediv1' class='collapse div1'>
        <div class="card"><br>
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
<br>
    <!-- All In One Pesawat -->
  <div id='collapsediv2' class='collapse'>
        <div class="card"><br>
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
                            <label for="#">Keberangkatan</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
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
  
  <!-- All In One Mobil -->
  <div id='collapsediv3' class='collapse div3'>
        <div class="card">
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
                </form>
            </div>
       </div>
  </div>


<!-- All In One Hotel -->
  <div id='collapsediv4' class='collapse div4'>
        <div class="card"><br>
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
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="#">Check In</label>
                        <input type="date" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Check-in" aria-describedby="basic-addon1">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="#">Check Out</label>
                        <input type="date" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Check-in" aria-describedby="basic-addon1">
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
                </div>
            </form>
          </div>
        </div>
  </div> 
   <!-- All In One Wisata -->
   <div id='collapsediv5' class='collapse div5'>
        <div class="card">
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
</body>
</html>