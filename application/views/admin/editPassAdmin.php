<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Reset Password Admin</h3>
                </div>


                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo base_url("Admin/adminEdit/$admin->id_admin") ?>" name="form" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
                    <div class="box-body">

                        <input type="hidden" name="id_admin" value="<?php echo $admin->id_admin ?>" />
                        <input type="hidden" name="nama_lengkap" value="<?php echo $admin->nama_lengkap ?>" />
                        <input type="hidden" name="email" value="<?php echo $admin->email ?>" />
                        <input type="hidden" name="password" value="<?php echo $admin->password ?>" />
                        <input type="hidden" name="jenis_kelamin" value="<?php echo $admin->jenis_kelamin ?>" />
                        <input type="hidden" name="nomor_hp" value="<?php echo $admin->nomor_hp?>" />
                        <input type="hidden" name="post_date" value="<?php echo $admin->post_date?>" />
                        <input class="form-control-file" type="hidden" name="foto" value="<?php echo $admin->foto?>" />
                        <input class="form-control-file" type="hidden" name="old_image" value="<?php echo $admin->foto ?>" />

                        <div class="form-group">
                            <label for="nama_lengkap">Nama admin : <?= $admin->nama_lengkap?></label>
                        </div>

                        <div class="form-group">
                            <label for="email">Email admin : <?= $admin->email?></label>
                        </div>

                        <div class="form-group">
                            <label for="nama_paket">Apakah Anda ingin reset Password <?= $admin->nama_lengkap?> ?</label>
                        </div>



                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> RESET</button>
                    </div>
                </form>
            </div>
        </div>
</section>

</div>