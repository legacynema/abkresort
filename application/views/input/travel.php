<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?= base_url('node_modules/') ?>bootstrap/dist/css/bootstrap.css">
    <title>Wisata</title>
</head>
<body>

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12  ">
    
    <div class="slideshow aem-GridColumn aem-GridColumn--default--12">
<!-- Slideshow -->

    <div class="slideshow-image full-width">
        
            
            
                <div style="position:relative">
                    <img src="<?= base_url('assets/') ?>img/bannerwisata.jpg" class="d-block w-100" height="100%" alt="Slideshow">
                </div>
            
        
    </div>

    <!-- End of Slideshow -->

</div>
<div class="book-flight-partner aem-GridColumn aem-GridColumn--default--12">

	<div class="col-lg-3 col-md-5 col-sm-6 col-xs-12 parent-book-partner no-gutters p-0" style="top: 114px;">
        <div class="card" style="border: 0;border-radius: 0 !important;border-top: 3px solid #6553a2;box-shadow: 0px 0px 2px #6553a2;">
			<form id="book-flight-form" novalidate="novalidate">
			  <div class="card-header indt-book-header">
                  PILIH DESTINASI WISATA
			  </div>
			  <div class="card-block indt-book-body">
				<div class="input-group">
				  <span class="input-group-addon" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span> 
				  <input id="origin" name="origin" type="text" class="form-control ui-autocomplete-input" placeholder="Tujuan" aria-describedby="basic-addon1" autocomplete="off">
				</div>
        <br>
				<div class="row">
				  <div class="col-12" id="parent-first-flight">
					<div class="form-group">
					  <input type="text" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Dari" aria-describedby="basic-addon1">
					</div>
				  </div>
				</div>

				<div class="row">
				  <div class="col-12" id="parent-first-flight">
					<div class="form-group">
					  <input type="text" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Hingga" aria-describedby="basic-addon1">
					</div>
				  </div>
				</div>
			  </div>
			  <div class="card-footer text-muted" style="padding: 0;">
				<button id="searchTravel" type="submit" class="btn btn-primary btn-book-flight">CARI WISATA</button>
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