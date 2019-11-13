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

        <br>
        <div class="container bg-info">
            <h1 class="text-center" style="font-family:Helvetica Neue">Choose your Want</h1>
            
            <br><br>
            <!-- <h3 style="font-family:Helvetica Neue">Choose Detail</h3> -->
            <div class="row container">
                <div class="col-md-5">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="train">
                        <label class="custom-control-label" for="train">Kereta Api</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="plane">
                        <label class="custom-control-label" for="plane">Pesawat</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="car">
                        <label class="custom-control-label" for="car">Mobil</label>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hotel">
                        <label class="custom-control-label" for="hotel">Hotel</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="wisata">
                        <label class="custom-control-label" for="wisata">Tujuan Wisata</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="other">
                        <label class="custom-control-label" for="other">Lain-Lain</label>
                    </div>
                </div>
            </div>
            
            
            
        </div>

    

</body>
</html>