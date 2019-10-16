<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('node_modules/') ?>bootstrap/dist/css/app.css">
	<title>Penerbangan</title>
</head>
<body>
<div class="aem-Grid aem-Grid--12 aem-Grid--default--12  ">
    
    <div class="slideshow aem-GridColumn aem-GridColumn--default--12">
<!-- Slideshow -->

    <div class="slideshow-image full-width">
        
            
            
                <div style="position:relative">
                    <img src="<?= base_url('assets/') ?>img/bannerinput.jpg" class="d-block w-100" height="100%" alt="Slideshow">
                </div>
            
        
    </div>

    <!-- End of Slideshow -->

</div>
<div class="book-flight-partner aem-GridColumn aem-GridColumn--default--12">

	<div class="col-lg-3 col-md-5 col-sm-6 col-xs-12 parent-book-partner no-gutters p-0" style="top: 114px;">
        <div class="card" style="border: 0;border-radius: 0 !important;border-top: 3px solid #6553a2;box-shadow: 0px 0px 2px #6553a2;">
			<form id="book-flight-form" novalidate="novalidate">
			  <div class="card-header indt-book-header">
                  PURCHASE TICKET
			  </div>
			  <div class="card-block indt-book-body">
				<div class="input-group">
				  <label class="custom-control custom-radio">
					<input id="radio1" name="type-flight" checked="" autofocus="" type="radio" class="custom-control-input" value="O">
					<span class="custom-control-indicator"></span>
					<span class="custom-control-description">One Way</span>
				  </label>
				  <label class="custom-control custom-radio">
					<input id="radio2" name="type-flight" type="radio" class="custom-control-input" value="R">
					<span class="custom-control-indicator"></span>
					<span class="custom-control-description">Round Trip</span>
				  </label>
				</div>
				<div class="input-group">
				  <span class="input-group-addon" id="basic-addon1"><span class="lnr lnr-train"></span></span>
				  <input id="origin" name="origin" type="text" class="form-control ui-autocomplete-input" placeholder="From" aria-describedby="basic-addon1" autocomplete="off">
				</div>
				<div class="input-group">
				  <span class="input-group-addon" id="basic-addon1"><span class="lnr lnr-rocket"></span></span>
				  <input id="destination" name="destination" type="text" class="form-control ui-autocomplete-input" placeholder="To" aria-describedby="basic-addon1" autocomplete="off">
				</div>
				<div class="row">
				  <div class="col-12" id="parent-first-flight">
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><span class="lnr lnr-calendar-full"></span></span>
					  <input type="text" class="form-control" readonly="" id="first-flight-date" name="first-flight-date" placeholder="Depart" aria-describedby="basic-addon1">
					</div>
				  </div>
				  <div class="col-6 col-md-6 p-l-small" id="parent-second-flight" style="display: none;">
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1"><span class="lnr lnr-calendar-full"></span></span>
					  <input type="text" class="form-control" readonly="" id="second-flight-date" name="second-flight-date" placeholder="Return" aria-describedby="basic-addon1">
					</div>
				  </div>
				</div>
				<div class="row">

				  <div class="col-4 col-md-4 p-r-0">
					<div class="input-group">
					  <select id="paxAdult" class="form-control valid" onchange="garudaRules.generateChild()" aria-invalid="false"><option value="0">0 Adults</option><option value="1" selected="selected">1 Adults</option><option value="2">2 Adults</option><option value="3">3 Adults</option><option value="4">4 Adults</option><option value="5">5 Adults</option><option value="6">6 Adults</option><option value="7">7 Adults</option><option value="8">8 Adults</option><option value="9">9 Adults</option></select>
					</div>
				  </div>

                  <div class="col-4 col-md-4 p-r-0 p-l-7">
					<div class="input-group">
					  <select id="paxChild" class="form-control" onchange="garudaRules.generateAdult()"><option value="0" selected="selected">0 Children</option><option value="1">1 Children</option><option value="2">2 Children</option><option value="3">3 Children</option><option value="4">4 Children</option><option value="5">5 Children</option><option value="6">6 Children</option><option value="7">7 Children</option><option value="8">8 Children</option></select>
					</div>
				  </div>

                  <div class="col-4 col-md-4 p-l-7">
					<div class="input-group">
					  <select id="paxInfant" class="form-control"><option value="0" selected="selected">0 Infants</option><option value="1">1 Infants</option></select>
					</div>
				  </div>

				  <div class="col-12 col-md-12">
					<div class="input-group">
					  <select id="cabin" class="form-control">
						<option value="E">Economy Class</option>
						<option value="B">Business Class</option>
						<option value="F">First Class</option>
					  </select>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="card-footer text-muted" style="padding: 0;">
				<button id="searchFlight" type="submit" class="btn btn-primary btn-book-flight">SEARCH FLIGHT</button>
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