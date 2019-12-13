<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah User</h3>
                </div>
                
                <!-- FLASH DATA PEMBERITAHUAN -->
                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Alert!</h4>
                    <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?> 
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo base_url(). 'Admin/penginapanAdd'; ?>" name="form"  onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input class="form-control" type="text"  name="nama_lengkap" placeholder="example : Paket Hemat">   
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password"  name="password" >   
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="text"  name="email" placeholder="your@email.com">   
                        </div>
                        <div class="form-group">
                            <div class="radio">
                                <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                Laki
                                </label>
                                <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                Perempuan
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nomorhp">Nomor Hp</label>
                            <div class="input-group">
                                <span class="input-group-addon">+62</span>
                                <input type="text" name="nomorhp" class="form-control" placeholder="8xxx">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto *max size 1MB</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                        <script>
                                function validateForm() {
                                var namaPeng = document.forms["form"]["nama_penginapan"].value;
                                var kota = document.forms["form"]["id_kota"].value;
                                var Harga = document.forms["form"]["harga"].value;
                                var tamu = document.forms["form"]["jumlah_tamu"].value;

                                    if(kota == "" && namaPeng == "" && tamu == "" && Harga == ""){
                                        namaPeng.innerHTML = "data penginapan harus diisi";
                                        return false;
                                    }
                                    else if (kota == "" ) {
                                        alert("Kota Harus di Isi");
                                        return false;
                                    }else if (namaPeng == ""){
                                        alert("Nama Harus di Isi");
                                        return false;
                                    }else if (tamu == ""){
                                        alert("Jumlah Tamu Harus di Isi");
                                        return false;
                                    }else if (Harga == ""){
                                        alert("Harga Harus di Isi");
                                        return false;
                                    }
                                }
                        </script>
                        
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Simpan</button>
                        <button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</section>

</div>


