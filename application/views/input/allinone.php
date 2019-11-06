<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?= base_url('node_modules/') ?>bootstrap/dist/css/bootstrap.css">
    <title>Hotels</title>
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

    
        <div class="form-signin">
            <h1 class="text-center">Choose your Want</h1>
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" placeholder="Masukkan Nama Depan">
            <label for="email">Email:</label>
            <input type="text" class="form-control" placeholder="Masukkan Email Anda">
            <label for="nohp">No HP:</label>
            <input type="text" class="form-control" placeholder="Masukkan No HP Anda">
            <label for="password">Password:</label>
            <input type="password" class="form-control" placeholder="Masukkan Password">
            <label for="gender">Jenis Kelamin:</label>
            <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                <option value="2">Laki-Laki</option>
                <option value="3">Perempuan</option>
            </select>
            <label for="foto">Foto Profil:</label>
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>

            <br><br>
            <button class="btn btn-block btn-info">Daftar</button>
        </div>
    

</body>
</html>