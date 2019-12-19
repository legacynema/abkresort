<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-5">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Paket</h3>
                </div>


                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo base_url() . 'Admin/paketAdd'; ?>" name="form" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama_paket">Nama Paket</label>
                            <input class="form-control" type="text" name="nama_paket" placeholder="example : Paket Hemat">
                        </div>

                        <div class="form-group">
                            <label for="id_kota">Pilih Kota</label>
                            <select class="form-control" name="id_kota">
                                <option value="" disabled selected>Pilih Kota</option>

                                <?php foreach ($kota as $kot) : ?>
                                    <option value="<?= $kot->id_kota ?>"><?= $kot->nama_kota ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_penginapan">Nama Penginapan / ID PENGINAPAN</label>
                            <select class="form-control" name="id_penginapan">
                                <option value="" disabled selected>Pilih Penginapan</option>
                                <?php foreach ($penginapan as $peng) : ?>
                                    <option value="<?= $peng->id_penginapan ?>"><?= $peng->nama_penginapan ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_transport">Nama Transport / ID TRANSPORT</label>
                            <select class="form-control" name="id_transport">
                                <option value="" disabled selected>Pilih Transportasi</option>
                                <?php foreach ($transport as $trns) : ?>
                                    <option value="<?= $trns->id_transport ?>"><?= $trns->nama_transp ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_wisata">Nama Wisata / ID WISATA</label>
                            <select class="form-control" name="id_wisata">
                                <option value="" disabled selected>Pilih Wisata</option>
                                <?php foreach ($wisata as $wst) : ?>
                                    <option value="<?= $wst->id_wisata ?>"><?= $wst->nama_wisata ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input type="text" name="harga" class="form-control" placeholder="Rp.">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto *max size 1MB</label>
                            <input type="file" class="form-control" name="foto">
                        </div>

                        <script>
                            function validateForm() {
                                var namaPak = document.forms["form"]["nama_paket"].value;
                                var kota = document.forms["form"]["id_kota"].value;
                                var peng = document.forms["form"]["id_penginapan"].value;
                                var trans = document.forms["form"]["id_transport"].value;
                                var wst = document.forms["form"]["id_wisata"].value;
                                var Harga = document.forms["form"]["harga"].value;

                                if (kota == "" && namaPak == "" && peng == "" && Harga == "" && trans == "" && wst == "") {
                                    alert("Data Paket harus di isi");
                                    return false;
                                } else if (kota == "") {
                                    alert("Kota Harus di Isi");
                                    return false;
                                } else if (namaPak == "") {
                                    alert("Nama Paket Harus di Isi");
                                    return false;
                                } else if (Harga == "") {
                                    alert("Harga Harus di Isi");
                                    return false;
                                }else if (peng == "" || trans == "" || wst == "") {
                                    alert("Penginapan, Transport, dan Wisata jangan di Kosongkan");
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
        <div class="col-md-7">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">List Paket</h3>
                </div>
                <!-- FLASH DATA PEMBERITAHUAN -->
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Alert!</h4>
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                <table id="example1" class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>ID </th>
                            <th>Kota</th>
                            <th>Nama Paket</th>
                            <th>Nama Penginapan</th>
                            <th>Transportasi</th>
                            <th>Wisara</th>
                            <th>Harga</th>
                            <th>Foto</th>
                            <th>Menu</th>
                        </tr>
                        </thead>    
                        <?php $nomor = 1; ?>
                        <?php

                        $this->db->select('
                                         p.id_paket as id,
                                         k.nama_kota,
                                         p.nama_paket,
                                         pg.nama_penginapan,
                                         t.nama_transp,
                                         w.nama_wisata,
                                         p.harga,
                                         p.foto
                                         ');
                        // SELECT 
                        $this->db->join('penginapan as pg', 'pg.id_penginapan = p.id_penginapan');
                        $this->db->join('transport as t', 't.id_transport = p.id_transport');
                        $this->db->join('kota as k', 'k.id_kota = p.id_kota');
                        $query =    $this->db->join('wisata as w', 'w.id_wisata = p.id_wisata')->get('paket as p');
                        $nomor = 1;

                        foreach ($query->result_array() as $paket) :
                            ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td>
                                    <p><?= $paket['id'] ?></p>
                                </td>
                                <td>
                                    <p><?= $paket['nama_kota'] ?></p>
                                </td>
                                <td>
                                    <p><?= $paket['nama_paket'] ?></p>
                                </td>
                                <td>
                                    <p><?= $paket['nama_penginapan'] ?></p>
                                </td>
                                <td>
                                    <p><?= $paket['nama_transp'] ?></p>
                                </td>
                                <td>
                                    <p><?= $paket['nama_wisata'] ?></p>
                                </td>
                                <td>
                                    <p>Rp. <?= number_format($paket['harga']) ?></p>
                                </td>

                                <td>
                                    <img src="<?php echo base_url('foto/admin/paket/' . $paket['foto']) ?>" width="64" />
                                </td>
                                <td>
                                    <?php echo anchor('Admin/paketEdit/' . $paket['id'], '<button class="btn btn-success margin" type="button"><span class="fa fa-pencil"></span> </button>'); ?>
                                    <?php echo anchor('Admin/paketDelete/' . $paket['id'], '<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?>
                                </td>
                            </tr>
                            <?php $nomor++; ?>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

</div>