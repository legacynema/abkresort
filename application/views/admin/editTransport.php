<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Transportasi</h3>
                </div>
                <!-- FLASH DATA PEMBERITAHUAN -->
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo base_url("Admin/transportEdit/$transport->id_transport") ?>" name="form" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">


                <input type="hidden" name="id_transport" value="<?php echo $transport->id_transport ?>" />
                <input type="hidden" name="post_date" />
                    <div class="box-body">
                        <div class="form-group">
                            <label for="id_kota">Jenis Transportasi</label>
                            <select class="form-control" name="jenis_transport">
                                <option value="" disabled selected>Pilih Transportasi</option>

                                <?php foreach ($jenis_transport as $trans) : ?>
                                    <option value="<?= $trans->id_transport ?>" <?php if ($transport->jenis_transport == $trans->id_transport){echo 'selected';} ?>> <?= $trans->nama_transport ?> </option>
                                <?php endforeach; ?>

                            </select>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="id_kota">Class </label>
                            <select class="form-control" name="class">
                                <option value="" disabled selected>Pilih Class</option>

                                <?php foreach ($class as $cls) : ?>
                                    <option value="<?= $cls->id_class ?>" <?php if ($transport->class == $cls->id_class){echo 'selected';} ?>> <?= $cls->nama_class ?> </option>
                                <?php endforeach; ?>

                            </select>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama_penginapan">Nama Transportasi</label>
                            <input class="form-control" type="text" name="nama_transp" value="<?php echo $transport->nama_transp ?>">
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="col-12" id="parent-first-flight">
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="text" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="tanggal" value="<?php echo $transport->tanggal ?>" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="rute_asal">Keberangkatan</label>
                            <select class="form-control" name="tempat_asal">
                                <option value="" disabled selected>Pilih Keberangkatan</option>

                                <?php foreach ($tempat_transport as $tt) : ?>
                                    <option value="<?= $tt->id_tempat ?>" <?php if ($transport->tempat_asal == $tt->id_tempat){echo 'selected';} ?>> <?= $tt->nama_tempat ?> </option>
                                <?php endforeach; ?>

                            </select>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="rute_asal">Tujuan</label>
                            <select class="form-control" name="tempat_tujuan">
                                <option value="" disabled selected>Pilih Tujuan</option>

                                <?php foreach ($tempat_transport as $tt) : ?>
                                    <option value="<?= $tt->id_tempat ?>" <?php if ($transport->tempat_tujuan == $tt->id_tempat){echo 'selected';} ?>> <?= $tt->nama_tempat ?> </option>
                                <?php endforeach; ?>

                            </select>
                        </div>
                    </div>

                    <div class="box-body">
                        <label for="jam_berangkat">Jam Keberangkatan</label>
                        <div class="input-group">
                            <input type="time" name="jam_berangkat" class="form-control" value="<?php echo $transport->jam_berangkat?>">
                        </div>
                    </div>

                    <div class="box-body">
                        <label for="jam_tiba">Jam Kedatangan</label>
                        <div class="input-group">
                            <input type="time" name="jam_tiba" class="form-control" value="<?php echo $transport->jam_tiba?>">
                        </div>
                    </div>

                    <div class="box-body">
                        <label for="kisaran">Kisaran Harga </label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                            <input type="text" name="kisaran" class="form-control" value="<?php echo $transport->kisaran?>">
                        </div>
                    </div>

                    <div class="box-body">
                        <label for="harga">Harga</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                            <input type="text" name="harga" class="form-control" value="<?php echo $transport->harga ?>">
                        </div>
                    </div>

                    <script>
                        function validateForm() {
                            var jenis = document.forms["form"]["jenis_transport"].value;
                            var class_ = document.forms["form"]["class"].value;
                            var nama = document.forms["form"]["nama_transp"].value;
                            var tanggal = document.forms["form"]["tanggal"].value;
                            var berangkat = document.forms["form"]["tempat_asal"].value;
                            var tujuan = document.forms["form"]["tempat_tujuan"].value;
                            var jam_berangkat = document.forms["form"]["jam_berangkat"].value;
                            var jam_tiba = document.forms["form"]["jam_tiba"].value;
                            var kisaran = document.forms["form"]["kisaran"].value;
                            var Harga = document.forms["form"]["harga"].value;
                            if (jenis == "" && class_ == "" && nama == "" && tanggal == "" && berangkat == "" && tujuan == "" &&
                                jam_berangkat == "" && jam_tiba == "" && kisaran == "" && Harga == "") {
                                alert("Data Transportasi Harus di Isi");
                                return false;
                            } else if (jenis == "") {
                                alert("Jenis Transportasi Harusdi Isi");
                                return false;
                            } else if (class_ == "") {
                                alert("Class Harus di Isi");
                                return false;
                            } else if (nama == "") {
                                alert("Nama Transportasi Harus di Isi");
                                return false;
                            } else if (tanggal == "") {
                                alert("Tanggal di Harus Isi");
                                return false;
                            } else if (berangkat == "") {
                                alert("Keberangkatan Harus di Isi");
                                return false;
                            } else if (tujuan == "") {
                                alert("Tujuan Harus di Isi");
                                return false;
                            } else if (jam_berangkat == "") {
                                alert("Jam Keberangkatan Harus di Isi");
                                return false;
                            } else if (jam_tiba == "") {
                                alert("Jam Kedatangan Harus di Isi");
                                return false;
                            } else if (kisaran == "") {
                                alert("Kisaran Harga Harus di Isi");
                                return false;
                            } else if (Harga == "") {
                                alert("Harga Harus di Isi");
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