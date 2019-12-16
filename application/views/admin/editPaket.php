<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Paket</h3>
                </div>


                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo base_url("Admin/paketEdit/$paket->id_paket") ?>" name="form" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
                    <div class="box-body">

                        <input type="hidden" name="id_paket" value="<?php echo $paket->id_paket ?>" />
                    
                        <div class="form-group">
                            <label for="nama_paket">Nama Paket</label>
                            <input class="form-control" type="text" name="nama_paket" value="<?= $paket->nama_paket?>">
                        </div>

                        <div class="form-group">
                            <label for="id_kota">Pilih Kota</label>
                            <select class="form-control" name="id_kota">
                                <option value="" disabled selected>Pilih Kota</option>
                                <?php foreach ($kota as $kot) : ?>
                                    <option value="<?= $kot->id_kota ?>" <?php if ($paket->id_kota == $kot->id_kota) {echo 'selected';} ?>> <?= $kot->nama_kota ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_penginapan">Nama Penginapan / ID PENGINAPAN</label>
                            <select class="form-control" name="id_penginapan">
                                <option value="" disabled selected>Pilih Penginapan</option>
                                <?php foreach ($penginapan as $peng) : ?>
                                    <option value="<?= $peng->id_penginapan ?>" <?php if ($paket->id_penginapan== $peng->id_penginapan) {echo 'selected';} ?>> <?= $peng->nama_penginapan ?> </option>
                                <?php endforeach; ?>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_transport">Nama Transport / ID TRANSPORT</label>
                            <select class="form-control" name="id_transport">
                                <option value="" disabled selected>Pilih Transportasi</option>
                                <?php foreach ($transport as $trns) : ?>
                                    <option value="<?= $trns->id_transport ?>" <?php if ($paket->id_transport== $trns->id_transport) {echo 'selected';} ?>> <?= $trns->nama_transp ?> </option>
                                <?php endforeach; ?>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_wisata">Nama Wisata / ID WISATA</label>
                            <select class="form-control" name="id_wisata">
                                <option value="" disabled selected>Pilih Wisata</option>
                                <?php foreach ($wisata as $wst) : ?>
                                    <option value="<?= $wst->id_wisata ?>" <?php if ($paket->id_wisata== $wst->id_wisata) {echo 'selected';} ?>> <?= $wst->nama_wisata ?> </option>
                                <?php endforeach; ?>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input type="text" name="harga" class="form-control" value="<?= $paket->harga?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto *max size 1MB</label>
                            <input type="file" class="form-control" name="foto">
                            <input class="form-control-file" type="hidden" name="old_image" value="<?php echo $paket->foto ?>" />
                            <img src="<?php echo base_url('foto/admin/paket/' . $paket->foto) ?>" width="64" />
                        </div>

                        <script>
                            function validateForm() {
                                var namaPeng = document.forms["form"]["nama_penginapan"].value;
                                var kota = document.forms["form"]["id_kota"].value;
                                var Harga = document.forms["form"]["harga"].value;
                                var tamu = document.forms["form"]["jumlah_tamu"].value;

                                if (kota == "" && namaPeng == "" && tamu == "" && Harga == "") {
                                    namaPeng.innerHTML = "data penginapan harus diisi";
                                    return false;
                                } else if (kota == "") {
                                    alert("Kota Harus di Isi");
                                    return false;
                                } else if (namaPeng == "") {
                                    alert("Nama Harus di Isi");
                                    return false;
                                } else if (tamu == "") {
                                    alert("Jumlah Tamu Harus di Isi");
                                    return false;
                                } else if (Harga == "") {
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