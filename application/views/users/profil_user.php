<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="block-half">Profil Traveler</h1><br>
        <div class="block block--insert-small border">
            <div class="bzg bzg--no--gutter">
                <div class="bzg_c" data-col="m12, 20">
                    <div class="profil-main">
                    <h4 class="no-space title text-up">Profil Saya</h4>
                    <div class="block--inset">
                        <table class="table table-responsive">
                        <tr>
                            <td rowspan="15" width="250px">
                                <img src="<?= base_url('assets/') ?>img/user.jpg"  />
                            </td>
                        </tr>
                        <tr>
                            <td><b>Nama</b></td>
                            <td>:</td>
                            <td>Firman</td>
                        </tr>
                        <tr>
                            <td><b>Email</b></td>
                            <td>:</td>
                            <td>pyterpolis1@gmail.com</td>
                        </tr> 
                        
                        <tr>
                            <td><b>Jenis Kelamin</b></td>
                            <td>:</td>
                            <td>Laki-Laki</td>
                        </tr>
                        
                        <tr>
                            <td><b>No Telfon</b></td>
                            <td>:</td>
                            <td>0811210210210</td>
                        </tr>            
                    </table><br>
                        <div class="col-md-8">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editProfile">Edit Profile</button>                    
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#editPassword">Edit Password</button>                    
                        </div>   
                    </div>
                </div>
            </div>
           </div> 
        </div>
        <!-- Modal -->
            <div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" placeholder="input name">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="" placeholder="email@example.com">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <input type="radio" name="" value="Laki-laki">Laki-Laki
                                <input type="radio" name="" value="Perempuan">Perempuann
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">No Handphone</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="" placeholder="+62****">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 ">Foto Profil</label>
                                <div class="col-sm-10">
                                    <input type="file" id="" placeholder="+62****">
                                </div>
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="editPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Old Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="" placeholder="input name">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">New Passwrord</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="" placeholder="input name">
                                </div>
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
            </div>
    </div>
</body>
</html>