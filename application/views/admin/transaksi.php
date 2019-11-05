<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-hover table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>USER</th>
                  <th>PAKET</th>
                  <th>PENGINAPAN</th>
                  <th>HARI</th>
                  <th>TRANSPORTASI</th>
                  <th>WISATA</th>
                  <th>HARGA</th>
                  <th>ADMIN</th>
                </tr>
                </thead>

                <tbody>
                <?php  $nomor =1; ?>
						<?php

                        $this->db->select
                        (
                          'id_transaksi,
                           nama_lengkap,
                           id_paket,
                           nama_penginapan,
                           hari,
                           id_rute,
                           nama_wisata,
                           harga,
                           id_admin'
                        );
                        // SELECT 
                                  $this->db->join('user', 'user.nama_lengkap = transaksi.id_user');
                                  $this->db->join('penginapan', 'penginapan.nama_penginapan = transaksi.id_penginapan');
                        $query =  $this->db->join('wisata', 'wisata.nama_wisata = transaksi.id_wisata')->get('transaksi');
                        $nomor = 1;

						foreach ($query->result_array() as $trans) :
							?>
							<tr>
							  <td>
									<p><?= $trans['id_transaksi'] ?></p>
								</td>
								<td>
									<p><?= $trans['nama_lengkap'] ?></p>
								</td>
								<td>
									<p><?= $trans['id_paket'] ?></p>
								</td>
								<td>
									<p><?= $trans['nama_penginapan'] ?></p>
								</td>
                <td>
									<p><?= $trans['hari'] ?></p>
								</td>
                <td>
									<p><?= $trans['id_rute'] ?></p>
								</td>
                <td>
									<p><?= $trans['nama_wisata'] ?></p>
								</td>
                <td>
									<p><?= $trans['id_admin'] ?></p>
								</td>
								<td>
                  <p>Rp. <?= number_format($trans['harga']) ?></p>
								</td>
                                <td>
                                    <?php  echo anchor('Admin/transaksiDelete/'.$trans['id_penginapan'], '<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?>
                                </td>
							</tr>
							<?php $nomor++; ?>
						<?php endforeach; ?>
                </tbody>
                
                <tfoot>
                <tr>
                <th>ID</th>
                  <th>USER</th>
                  <th>PAKET</th>
                  <th>PENGINAPAN</th>
                  <th>HARI</th>
                  <th>TRANSPORTASI</th>
                  <th>WISATA</th>
                  <th>HARGA</th>
                  <th>ADMIN</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
</div>