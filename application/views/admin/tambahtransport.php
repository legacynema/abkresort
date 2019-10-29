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
                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?> 
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="<?php echo base_url(). 'Admin/transportasiAdd'; ?>" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="id_kota">Jenis Transportasi</label>
                                    <select class="form-control" name="id_transport">
                                        <option value="" disabled selected>Pilih Transportasi</option>

                                        <?php foreach($transport as $trans):?>
                                                    <option value="<?= $trans->id_transport?>"><?= $trans->nama_transport?></option>
                                                <?php  endforeach;?>
                                        
                                    </select>
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="rute_asal">Keberangkatan</label>
                                    <select class="form-control" name="rute_asal">
                                        <option value="" disabled selected>Pilih Kota</option>

                                        <?php foreach($kota as $kot):?>
                                                    <option value="<?= $kot->id_kota?>"><?= $kot->nama_kota?></option>
                                                <?php  endforeach;?>
                                        
                                    </select>
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="rute_tujuan">Tujuan</label>
                                    <select class="form-control" name="rute_tujuan">
                                        <option value="" disabled selected>Pilih Kota</option>

                                        <?php foreach($kota as $kot):?>
                                                    <option value="<?= $kot->id_kota?>"><?= $kot->nama_kota?></option>
                                                <?php  endforeach;?>
                                        
                                    </select>
                            </div>
                        </div>

                        <div class="box-body">
                            <label for="harga">Harga *per hari</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input type="text" name="harga" class="form-control" placeholder="Rp.">
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Simpan</button>
                            <button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">List Transportasi</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                    <table class="table table-hover">
                        <tr>
                            <th style="width: 10px">#</th>
                            <!-- <th>ID </th> -->
                            <th>Jenis Transportasi</th>
                            <th>Keberangkatan</th>
                            <th>Tujuan</th>
                            <th>Harga</th>
                            <th>Menu</th>
                        </tr>
                        
                        <?php  $nomor =1; ?>
						<?php

                        // $this->db->select('t.id_transportasi,jt.nama,k.nama_kota, k2.nama_kota, t.harga');
                        // // SELECT 
                        //           $this->db->join('kota as k', 'k.id_kota = t.tujuan');
                        //           $this->db->join('kota as k2', 'k2.id_kota = t.tujuan');
                        // $query =  $this->db->join('jenis_transportasi as jt', 'jt.id_trans = t.id_jenis_transportasi')
                        // ->get('transportasi as t');
                        // $nomor = 1;

                        $this->db->select('id_rute, nama_transport,rute_asal,rute_tujuan, harga');
                        // SELECT 
                                //   $this->db->join('kota', 'kota.id_kota = rute.rute_asal');
                        $query =  $this->db->join('transport', 'transport.id_transport = rute.id_transport')->get('rute');
                        $nomor = 1;
                        
                        // SELECT t.id_transportasi,jt.nama,k.nama_kota,k2.nama_kota ,t.harga
                        // FROM transportasi as t 
                        // INNER JOIN jenis_transportasi as jt 
                        // ON jt.id_trans = t.id_transportasi
                        // INNER JOIN kota as k 
                        // ON k.id_kota = t.keberangkatan
                        // INNER JOIN kota as k2
                        // ON k2.id_kota = t.tujuan
						foreach ($query->result_array() as $peng) :
							?>
							<tr>
							<td><?php echo $nomor; ?></td>
								<td>
									<p><?= $peng['nama_transport'] ?></p>
								</td>
								<td>
									<p><?= $peng['rute_asal'] ?></p>
								</td>
								<td>
									<p><?= $peng['rute_tujuan'] ?></p>
								</td>
								<td>
									<p>Rp. <?= number_format($peng['harga']) ?></p>
                                    
								</td>

                                <td>
                                    <?php  echo anchor('Admin/transportasiDelete/'.$peng['id_rute'], '<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?>
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