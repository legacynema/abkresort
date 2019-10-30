<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('node_modules/') ?>bootstrap/dist/css/bootstrap.css">
    <title>Hotels</title>
</head>
<body>

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12  ">
    
    <div class="slideshow aem-GridColumn aem-GridColumn--default--12">
<!-- Slideshow -->

    <div class="slideshow-image full-width">
        
            
            
                <div style="position:relative">
                    <img src="<?= base_url('assets/') ?>img/bannermobil.jpg" class="d-block w-100" height="100%" alt="Slideshow">
                </div>
            
        
    </div>

    <!-- End of Slideshow -->

</div>
<div class="book-flight-partner aem-GridColumn aem-GridColumn--default--12">

	<div class="col-lg-3 col-md-5 col-sm-6 col-xs-12 parent-book-partner no-gutters p-0" style="top: 114px;">
        <div class="card" style="border: 0;border-radius: 0 !important;border-top: 3px solid #6553a2;box-shadow: 0px 0px 2px #6553a2;">
			<form id="book-flight-form" novalidate="novalidate">
			  <div class="card-header indt-book-header">
                  SEWA MOBIL
			  </div>
			  <div class="card-block indt-book-body">
				<div class="input-group">
				  <span class="input-group-addon" id="basic-addon1"><i class="fas fa-helicopter"></i></span> 
				  <input id="origin" name="origin" type="text" class="form-control ui-autocomplete-input" placeholder="Pengambilan" aria-describedby="basic-addon1" autocomplete="off">
				</div>
        <br>
				<div class="row">
				  <div class="col-12" id="parent-first-flight">
					<div class="form-group">
                      <input type="text" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Tanggal Pengambilan" aria-describedby="basic-addon1">
                      <div class="input-group">
                      <select id="timepick" class="form-control valid" aria-invalid="false"><option value="0">00:00</option><option value="19" selected="selected">00:30</option><option value="2">01:00</option><option value="3">01:30</option><option value="4">02:00</option><option value="5">02:30</option><option value="6">03:00</option>
                      <option value="7">03:30</option><option value="8">04:30</option><option value="9">05:00</option><option value="10">05:30</option><option value="11">06:00</option><option value="12">06:30</option><option value="13">07:00</option><option value="14">07:30</option><option value="15">08:00</option><option value="16">08:30</option>
                      <option value="17">09:00</option><option value="18">09:30</option><option value="19">10:00</option><option value="20">10:30</option><option value="21">11:00</option><option value="22">11:30</option><option value="23">11:30</option><option value="24">12:00</option><option value="25">12:30</option><option value="26">13:00</option><option value="27">13:30</option>
                      <option value="28">14:00</option><option value="29">14:30</option><option value="30">15:00</option><option value="31">15:30</option><option value="32">16:00</option><option value="33">16:30</option><option value="34">17:00</option><option value="35">17:30</option><option value="36">18:00</option><option value="37">18:30</option><option value="38">19:00</option>
                      <option value="39">19:30</option><option value="40">20:00</option><option value="41">20:30</option><option value="42">21:00</option><option value="43">21:30</option><option value="44">22:00</option><option value="45">22:30</option><option value="46">23:00</option><option value="47">23:30</option></select>
					</div>
					</div>
				  </div>
				</div>

				<div class="row">
				  <div class="col-12" id="parent-first-flight">
					<div class="form-group">
                      <input type="text" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Tanggal Pengembalian" aria-describedby="basic-addon1">
                      <div class="input-group">
                      <select id="timereturn" class="form-control valid" aria-invalid="false"><option value="0">00:00</option><option value="19" selected="selected">00:30</option><option value="2">01:00</option><option value="3">01:30</option><option value="4">02:00</option><option value="5">02:30</option><option value="6">03:00</option>
                      <option value="7">03:30</option><option value="8">04:30</option><option value="9">05:00</option><option value="10">05:30</option><option value="11">06:00</option><option value="12">06:30</option><option value="13">07:00</option><option value="14">07:30</option><option value="15">08:00</option><option value="16">08:30</option>
                      <option value="17">09:00</option><option value="18">09:30</option><option value="19">10:00</option><option value="20">10:30</option><option value="21">11:00</option><option value="22">11:30</option><option value="23">11:30</option><option value="24">12:00</option><option value="25">12:30</option><option value="26">13:00</option><option value="27">13:30</option>
                      <option value="28">14:00</option><option value="29">14:30</option><option value="30">15:00</option><option value="31">15:30</option><option value="32">16:00</option><option value="33">16:30</option><option value="34">17:00</option><option value="35">17:30</option><option value="36">18:00</option><option value="37">18:30</option><option value="38">19:00</option>
                      <option value="39">19:30</option><option value="40">20:00</option><option value="41">20:30</option><option value="42">21:00</option><option value="43">21:30</option><option value="44">22:00</option><option value="45">22:30</option><option value="46">23:00</option><option value="47">23:30</option></select>
					</div>
					</div>
				  </div>
				</div>

				

				</div>
			  </div>
			  <div class="card-footer text-muted" style="padding: 0;">
				<button id="searchCar" type="submit" class="btn btn-primary btn-book-flight">CARI MOBIL</button>
			  </div>
			</form>
        </div>
      </div>
	
</div>
<div class="livefyre-carousel aem-GridColumn aem-GridColumn--default--12"></div>

    <div class="new newpar section aem-Grid-newComponent">

</div>

</div>


</body>
</html>