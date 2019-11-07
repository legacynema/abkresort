<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar</title>
</head>
 
<body>
<form action="<?php echo base_url(). 'Home/userAdd'; ?>" name="form"  onsubmit="return validateForm()" method="post" enctype="multipart/form-data"">
    <div class="container">
        <div class="form-signin">
            <h1 class="text-center">Daftar</h1>

            <label for="nama_lengkap">Nama:</label>
            <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan Nama Depan">
            
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" placeholder="Masukkan Email Anda">
            
            <label for="nohp">No HP:</label>
            <input type="text" class="form-control" name="nomor_hp" placeholder="Masukkan No HP Anda">
            
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
            
            <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin : </label>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-Laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuann
            </div>

            <!-- <label for="foto">Foto Profil:</label>
            <div class="custom-file">
            <input type="file" class="custom-file-input" nama="foto"  aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div> -->

                        

            <br><br>
            <button type="submit" class="btn btn-block btn-info">Daftar</button>
        </div>
    </div>
</form>
                        <!-- <script>
                                function validateForm() {
                                var namaPeng = document.forms["form"]["nama_lengkap"].value;
                                var email = document.forms["form"]["email"].value;
                                var nomor_hp = document.forms["form"]["nomor_hp"].value;
                                var password = document.forms["form"]["password"].value;
                                var jenis_kelamin = document.forms["form"]["jenis_kelamin"].value;

                                    if(namaPeng == "" && email == "" && nomor_hp == "" && password == "" && password == "" jenis_kelamin){
                                        alert("Data Anda harus di Isi");
                                        return false;
                                    }
                                    if (namaPeng == "") {
                                        alert("Nama harus di Isi");
                                        return false;
                                    }else if (email == ""){
                                        alert("Email harus di Isi");
                                        return false;
                                    }else if (nomor_hp == ""){
                                        alert("Nomor HP harus di Isi");
                                        return false;
                                    }else if (password == ""){
                                        alert("Password harus di Isi");
                                        return false;
                                    }else if (jenis_kelamin == ""){
                                        alert("Jenis Kelamin harus di Isi");
                                        return false;
                                    }
                                }
                        </script> -->
</body>
</html>

<script>
                                function validateForm() {
                                    var namaPeng = document.forms["form"]["nama_lengkap"].value;
                                    var email = document.forms["form"]["email"].value;
                                    var nomor_hp = document.forms["form"]["nomor_hp"].value;
                                    var password = document.forms["form"]["password"].value;
                                    var jenis_kelamin = document.forms["form"]["jenis_kelamin"].value;

                                    if(namaPeng == "" && email == "" && nomor_hp == "" && password == "" && jenis_kelamin == "" ){
                                        alert("Data Anda harus di Isi");
                                        return false;
                                    }
                                    if (namaPeng == "") {
                                        alert("Nama harus di Isi");
                                        return false;
                                    }else if (email == ""){
                                        alert("Email harus di Isi");
                                        return false;
                                    }else if (nomor_hp == ""){
                                        alert("Nomor HP harus di Isi");
                                        return false;
                                    }else if (password == ""){
                                        alert("Password harus di Isi");
                                        return false;
                                    }else if (jenis_kelamin == ""){
                                        alert("Jenis Kelamin harus di Isi");
                                        return false;
                                    }
                                }
                        </script>