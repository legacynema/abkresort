<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Wisata</h3>
                </div>
                <!-- FLASH DATA PEMBERITAHUAN -->
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo base_url("Admin/wisataEdit/$wisata->id_wisata") ?>" name="form" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
                    
                    <input type="hidden" name="id_wisata" value="<?php echo $wisata->id_wisata ?>" />
                    <input type="hidden" name="post_date" />
                    <div class="form-group">
                        <label for="id_kota">Pilih Kota</label>
                        <select class="form-control" name="id_kota">
                            <option value="" disabled selected>Pilih Kota</option>

                            <?php foreach ($kota as $kot) : ?>
                                <option value="<?= $kot->id_kota ?>" <?php if ($wisata->id_kota == $kot->id_kota) {echo 'selected';} ?>> <?= $kot->nama_kota ?> </option>
                            <?php endforeach; ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Tempat Wisata</label>
                        <input type="text" class="form-control" name="nama_wisata" value="<?php echo $wisata->nama_wisata?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Harga Tiket/orang</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                            <input type="number" name="harga_tiket" class="form-control" value="<?php echo $wisata->harga_tiket?>">
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="foto">Foto *max size 1MB</label>
                            <input type="file" class="form-control" name="foto">
                            <input class="form-control-file" type="hidden" name="old_image" value="<?php echo $wisata->foto ?>" />
                            <img src="<?php echo base_url('foto/admin/wisata/' . $wisata->foto) ?>" width="64" />
                    </div>

                    <script>
                        function validateForm() {
                            var kota = document.forms["form"]["id_kota"].value;
                            var nama = document.forms["form"]["nama_wisata"].value;
                            var harga = document.forms["form"]["harga_tiket"].value;

                            if (nama == "" && kota == "" && harga == "") {
                                alert("Data Wisata Harus di Isi");
                                return false;
                            }
                            if (nama == "") {
                                alert("Nama wisata di Isi");
                                return false;
                            } else if (kota == "") {
                                alert("Kota harus di Isi");
                                return false;
                            } else if (harga == "") {
                                alert("Harga harus di Isi");
                                return false;
                            }
                        }
                    </script>


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