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
                  <th>TRANSPORTASI</th>
                  <th>HARI</th>
                  <th>WISATA</th>
                  <th>TAMU</th>
                  <th>HARGA</th>
                  <th>MENU</th>
                </tr>
                </thead>

                <tbody>
                <?php  $nomor =1; ?>
						<?php

              // SELECT 
              // t.id_transaksi, u.nama_lengkap, t.id_paket, p.nama_penginapan, tr.nama_transp, t.hari, w.nama_wisata, t.tamu, t.total_harga
              // FROM transaksi as t
              // LEFT JOIN user as u
              // ON u.id_user = t.id_user
              // LEFT JOIN penginapan as p 
              // ON p.id_penginapan = t.id_penginapan
              // LEFT JOIN transport as tr
              // ON tr.id_transport = t.id_transport
              // LEFT JOIN wisata as w
              // ON w.id_wisata = t.id_wisata

                        $this->db->select
                        (
                          '
                          t.id_transaksi as id,
                          u.nama_lengkap,
                          t.id_paket,
                          p.nama_penginapan,
                          tr.nama_transp,
                          t.hari,
                          w.nama_wisata,
                          t.tamu,
                          t.total_harga
                          '
                        );
                        // SELECT 
                                  $this->db->join('user as u', 'u.id_user = t.id_user', 'left');
                                  $this->db->join('penginapan as p', 'p.id_penginapan = t.id_penginapan', 'left');
                                  $this->db->join('transport as tr', 'tr.id_transport = t.id_transport', 'left');
                        $query =  $this->db->join('wisata as w', 'w.id_wisata = t.id_wisata', 'left')->get('transaksi as t');
                        $nomor = 1;

						foreach ($query->result_array() as $trans) :
							?>
							<tr>
							  <td>
									<p><?= $trans['id'] ?></p>
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
									<p><?= $trans['nama_transp'] ?></p>
								</td>
                <td>
									<p><?= $trans['hari'] ?></p>
								</td>
                <td>
									<p><?= $trans['nama_wisata'] ?></p>
								</td>
                <td>
									<p><?= $trans['tamu'] ?></p>
								</td>
								<td>
                  <p>Rp. <?= number_format($trans['total_harga']) ?></p>
								</td>
                                <td>
                                    <?php  echo anchor('Admin/transaksiDelete/'.$trans['id'], '<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?>
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
                  <th>MENU</th>
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