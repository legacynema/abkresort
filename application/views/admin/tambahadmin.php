<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <!-- /.box -->

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">TRANSAKSI</h3>
                </div>
                 <!-- FLASH DATA PEMBERITAHUAN -->
                 <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Alert!</h4>
                    <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?> 
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAMA LENGKAP</th>
                                <th>EMAIL</th>
                                <th>NOMOR HP</th>
                                <th>JENIS KELAMIN</th>
                                <th>FOTO</th>
                                <th>MENU</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($admin as $adm) :
                                ?>
                                <tr>
                                    <td>
                                        <p><?= $adm->id_admin ?></p>
                                    </td>
                                    <td>
                                        <p><?= $adm->nama_lengkap ?></p>
                                    </td>
                                    <td>
                                        <p><?= $adm->email ?></p>
                                    </td>
                                    <td>
                                        <p><?= $adm->nomor_hp ?></p>
                                    </td>
                                    <td>
                                        <p><?= $adm->jenis_kelamin ?></p>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url('foto/user/' . $adm->foto) ?>" width="64" />
                                    </td>
                                    <td>
									<?php echo anchor('Admin/adminEdit/'.$adm->id_admin,'<button class="btn btn-primary margin" type="button"><span class="fa fa-pencil"></span> </button>'); ?>
									<?php echo anchor('Admin/adminDelete/'.$adm->id_admin,'<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?> 
								</td>
                                </tr>
                            <?php endforeach; ?>


                        </tbody>

                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>NAMA LENGKAP</th>
                                <th>EMAIL</th>
                                <th>NOMOR HP</th>
                                <th>JENIS KELAMIN</th>
                                <th>FOTO</th>
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




</section>




<!-- FOOTER -->
</div>