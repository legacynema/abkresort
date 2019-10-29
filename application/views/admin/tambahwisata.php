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
                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?> 
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo base_url(). 'Admin/wisataAdd'; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                            <label for="id_kota">Pilih Kota</label>
                                <select class="form-control" name="id_kota">
                                    <option value="" disabled selected>Pilih Kota</option>

                                    <?php foreach($kota as $kot):?>
                                                <option value="<?= $kot->id_kota?>"><?= $kot->nama_kota?></option>
                                            <?php  endforeach;?>
                                      
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Tempat Wisata</label>
                            <input type="text" class="form-control" name="nama_wisata" placeholder="Green Park">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Harga Tiket/orang</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input type="number" name="harga_tiket" class="form-control" placeholder="Rp.">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" name="foto">
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
                    <h3 class="box-title">List Wisata</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <table class="table table-hover">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>ID</th>
                            <th>Kota</th>
                            <th>Harga Tiket</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                        <?php  $nomor =1; ?>
						<?php

                        $this->db->select('id_wisata, nama_kota, nama_wisata, harga_tiket, foto');
                        // SELECT 
                                //   $this->db->join('kota', 'kota.id_kota = penginapan.id_jenis_penginapan');
                        $query =  $this->db->join('kota', 'kota.id_kota = wisata.id_kota')->get('wisata');
                        $nomor = 1;

						foreach ($query->result_array() as $wis) :
							?>
							<tr>
							<td><?php echo $nomor; ?></td>
								<td>
									<p><?= $wis['id_wisata'] ?></p>
								</td>
								<td>
									<p><?= $wis['nama_kota'] ?></p>
								</td>
								<td>
									<p><?= $wis['nama_wisata'] ?></p>
								</td>
								<td>
                                <p>Rp. <?= number_format($wis['harga_tiket']) ?></p>
								</td>

								<td>
                                <img src="<?php echo base_url('foto/admin/wisata/'.$wis['foto']) ?>" width="64" />
								</td>
                                <td>
                                    <?php  echo anchor('Admin/wisataDelete/'.$wis['id_wisata'], '<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?>
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