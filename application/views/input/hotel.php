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
                    <img src="<?= base_url('assets/') ?>img/bannerhotel.jpg" class="d-block w-100" height="100%" alt="Slideshow">
                </div>
            
        
    </div>

    <!-- End of Slideshow -->

</div>
<div class="book-flight-partner aem-GridColumn aem-GridColumn--default--12">

	<div class="col-lg-3 col-md-5 col-sm-6 col-xs-12 parent-book-partner no-gutters p-0" style="top: 114px;">
        <div class="card" style="border: 0;border-radius: 0 !important;border-top: 3px solid #6553a2;box-shadow: 0px 0px 2px #6553a2;">
			<form id="book-flight-form" novalidate="novalidate">
			  <div class="card-header indt-book-header">
                  BOOKING PENGINAPAN
			  </div>
			  <div class="card-block indt-book-body">
				<div class="input-group">
				  <span class="input-group-addon" id="basic-addon1"><i class="fas fa-helicopter"></i></span> 
				  <input id="origin" name="origin" type="text" class="form-control ui-autocomplete-input" placeholder="Kota/Nama Hotel" aria-describedby="basic-addon1" autocomplete="off">
				</div>
        <br>
				<div class="row">
				  <div class="col-12" id="parent-first-flight">
					<div class="form-group">
					  <input type="text" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Check-in" aria-describedby="basic-addon1">
					</div>
				  </div>
				</div>

				<div class="row">
				  <div class="col-12" id="parent-first-flight">
					<div class="form-group">
					  <input type="text" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Check-out" aria-describedby="basic-addon1">
					</div>
				  </div>
				</div>

				<div class="row">

				  <div class="col-4 col-md-4 p-r-0">
					<div class="input-group">
					  <select id="paxAdult" class="form-control valid" aria-invalid="false"><option value="0">0 Adults</option><option value="1" selected="selected">1 Adults</option><option value="2">2 Adults</option><option value="3">3 Adults</option><option value="4">4 Adults</option><option value="5">5 Adults</option><option value="6">6 Adults</option><option value="7">7 Adults</option><option value="8">8 Adults</option><option value="9">9 Adults</option></select>
					</div>
				  </div>

                  <div class="col-4 col-md-4 p-r-0 p-l-7">
					<div class="input-group">
					  <select id="paxChild" class="form-control" ><option value="0" selected="selected">0 Children</option><option value="1">1 Children</option><option value="2">2 Children</option><option value="3">3 Children</option><option value="4">4 Children</option><option value="5">5 Children</option><option value="6">6 Children</option><option value="7">7 Children</option><option value="8">8 Children</option></select>
					</div>
				  </div>

				</div>
			  </div>
			  <div class="card-footer text-muted" style="padding: 0;">
				<button id="searchHotel" type="submit" class="btn btn-primary btn-book-flight">SEARCH HOTEL</button>
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