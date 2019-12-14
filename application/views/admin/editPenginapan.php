<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Penginapan</h3>
                </div>
                
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo base_url("Admin/penginapanEdit/$penginapan->id_penginapan")?>"  name="form"  onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_penginapan" value="<?php echo $penginapan->id_penginapan?>" />    
                    <div class="box-body">
                        <div class="form-group">
                            <label for="id_kota">Pilih Kota</label>
                                <select class="form-control" name="id_kota">
                                    <option value="" disabled selected>Pilih Kota</option>

                                    <?php foreach($kota as $kot):?>
                                                <option value="<?= $kot->id_kota?>" <?php if($penginapan->id_kota == $kot->id_kota ){ echo 'selected'; } ?> > <?= $kot->nama_kota?> </option>
                                            <?php  endforeach;?>
                                </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="nama_penginapan">Nama Hotel/Villa</label>
                            <input class="form-control" type="text"  name="nama_penginapan" value="<?php echo $penginapan->nama_penginapan?>">   
                        </div>

                        <div class="form-group">
                            <label for="jumlah_tamu">Jumlah Tamu</label>
                            <input type="number" class="form-control" name="jumlah_tamu" value="<?php echo $penginapan->jumlah_tamu?>">
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga *per hari</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input type="text" name="harga" class="form-control" value="<?php echo $penginapan->harga?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto *max size 1MB</label>
                            <input type="file" class="form-control" name="foto">
                            <input class="form-control-file" type="hidden" name="old_image" value="<?php echo $penginapan->foto ?>" />
                            <img src="<?php echo base_url('foto/admin/penginapan/'.$penginapan->foto) ?>" width="64" />
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
</section>

</div>


