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
                    <form action="<?php echo base_url() . 'Admin/transportasiAdd'; ?>" name="form" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="id_kota">Jenis Transportasi</label>
                                <select class="form-control" name="jenis_transport">
                                    <option value="" disabled selected>Pilih Transportasi</option>

                                    <?php foreach ($jenis_transport as $trans) : ?>
                                        <option value="<?= $trans->id_transport ?>"><?= $trans->nama_transport ?></option>
                                    <?php endforeach; ?>

                                </select>
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="id_kota">Class </label>
                                <select class="form-control" name="class">
                                    <option value="" disabled selected>Pilih Class</option>

                                    <?php foreach ($class as $trans) : ?>
                                        <option value="<?= $trans->id_class ?>"><?= $trans->nama_class ?></option>
                                    <?php endforeach; ?>

                                </select>
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="nama_penginapan">Nama Transportasi</label>
                                <input class="form-control" type="text" name="nama_transp" placeholder="example : Lion Air">
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="col-12" id="parent-first-flight">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="text" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="tanggal" placeholder="Keberangkatan" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="rute_asal">Keberangkatan</label>
                                <select class="form-control" name="tempat_asal">
                                    <option value="" disabled selected>Pilih Keberangkatan</option>

                                    <?php foreach ($tempat_transport as $tt) : ?>
                                        <option value="<?= $tt->id_tempat ?>"><?= $tt->nama_tempat ?></option>
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
                                        <option value="<?= $tt->id_tempat ?>"><?= $tt->nama_tempat ?></option>
                                    <?php endforeach; ?>

                                </select>
                            </div>
                        </div>

                        <div class="box-body">
                            <label for="jam_berangkat">Jam Keberangkatan</label>
                            <div class="input-group">
                                <input type="time" name="jam_berangkat" class="form-control" placeholder="Rp.">
                            </div>
                        </div>

                        <div class="box-body">
                            <label for="jam_tiba">Jam Kedatangan</label>
                            <div class="input-group">
                                <input type="time" name="jam_tiba" class="form-control" placeholder="Rp.">
                            </div>
                        </div>

                        <div class="box-body">
                            <label for="kisaran">Kisaran Harga </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input type="text" name="kisaran" class="form-control" placeholder="Rp.">
                            </div>
                        </div>

                        <div class="box-body">
                            <label for="harga">Harga</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input type="text" name="harga" class="form-control" placeholder="Rp.">
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

                                if (jenis == "" && class_ == "" && nama == "" && tanggal == "" && berangkat == "" && tujuan == ""
                                    && jam_berangkat == "" && jam_tiba == "" && kisaran == "" && Harga == "") {
                                    alert("Data Transportasi Harus di Isi");
                                    return false;
                                }else if (jenis == "") {
                                    alert("Jenis Transportasi Harusdi Isi");
                                    return false;
                                }else if (class_ == "") {
                                    alert("Class Harus di Isi");
                                    return false;
                                }else if (nama == "") {
                                    alert("Nama Transportasi Harus di Isi");
                                    return false;
                                }else if (tanggal == "") {
                                    alert("Tanggal di Harus Isi");
                                    return false;
                                }else if (berangkat == "") {
                                    alert("Keberangkatan Harus di Isi");
                                    return false;
                                }  else if (tujuan == "") {
                                    alert("Tujuan Harus di Isi");
                                    return false;
                                }else if (jam_berangkat == "") {
                                    alert("Jam Keberangkatan Harus di Isi");
                                    return false;
                                }else if (jam_tiba == "") {
                                    alert("Jam Kedatangan Harus di Isi");
                                    return false;
                                }else if (kisaran == "") {
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
            
        </div>
        <div class="row">
        <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">List Transportasi</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <!-- <th>ID </th> -->
                                    <th>ID</th>
                                    <th>Class</th>
                                    <th>Jenis Transport</th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Keberangkatan</th>
                                    <th>Tujuan</th>
                                    <th>Jam Keberangkatan</th>
                                    <th>Jam Tiba</th>
                                    <th>Kisaran</th>
                                    <th>Harga</th>
                                    <th>Menu</th>
                                </tr>
    
                                <?php $nomor = 1; ?>
                                <?php
    
                                //    $query = "SELECT
                                //    jt.nama_transport, t.nama_transp, tt.nama_tempat as berangkat, tb.nama_tempat as tiba
                                //    FROM transport as t
                                //    JOIN jenis_transport as jt
                                //    on jt.id_transport = t.jenis_transport
                                //    JOIN tempat_transport as tt
                                //    on tt.id_tempat = t.tempat_asal
                                //    JOIN tempat_transport as tb
                                //    on tb.id_tempat = t.tempat_tujuan";
    
                                //    $data=$this->db->query($query)->result_array();
    
                                $this->db->select(
                                't.id_transport as id,
                                 c.nama_class,
                                 jt.nama_transport,
                                 t.nama_transp,
                                 t.tanggal,
                                 tt.nama_tempat as berangkat,
                                 tb.nama_tempat as tiba,
                                 t.jam_berangkat,
                                 t.jam_tiba,
                                 t.kisaran,
                                 t.harga
                                 '
                                    );
    
                                $this->db->join('class as c', 'c.id_class = t.class');
                                $this->db->join('jenis_transport as jt', 'jt.id_transport = t.jenis_transport');
                                $this->db->join('tempat_transport as tb', 'tb.id_tempat = t.tempat_tujuan');
                                $query =  $this->db->join('tempat_transport as tt', 'tt.id_tempat = t.tempat_asal')->get('transport as t');
                                $nomor = 1;
    
                                foreach ($query->result_array() as $peng) :
                                    // var_dump($peng);
                                    ?>
    
                                    <tr>
                                        <td><?php echo $nomor; ?></td>
                                        <td>
                                            <p><?= $peng['id'] ?></p>
                                        </td>
                                        <td>
                                            <p><?= $peng['nama_class'] ?></p>
                                        </td>
                                        <td>
                                            <p><?= $peng['nama_transport'] ?></p>
                                        </td>
                                        <td>
                                            <p><?= $peng['nama_transp'] ?></p>
                                        </td>
                                        <td>
                                            <p><?= $peng['tanggal'] ?></p>
                                        </td>
                                        <td>
                                            <p><?= $peng['berangkat'] ?></p>
                                        </td>
                                        <td>
                                            <p><?= $peng['tiba'] ?></p>
                                        </td>
                                        <td>
                                            <p><?= $peng['jam_berangkat'] ?></p>
                                        </td>
                                        <td>
                                            <p><?= $peng['jam_tiba'] ?></p>
                                        </td>
                                        <td>
                                            <p>Rp. <?= $peng['kisaran'] ?></p>
                                        </td>
                                        <td>
                                            <p>Rp. <?= number_format($peng['harga']) ?></p>
    
                                        </td>
                                        <td>
                                            <?php echo anchor('Admin/transportasiDelete/' . $peng['id'], '<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?>
                                        </td>
                                    </tr>
                                    <?php $nomor++; ?>
                                <?php endforeach; ?>
                            </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>