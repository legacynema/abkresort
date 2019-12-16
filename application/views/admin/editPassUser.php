<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Reset Password User</h3>
                </div>


                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo base_url("Admin/userEdit/$user->id_user") ?>" name="form" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
                    <div class="box-body">

                        <input type="hidden" name="id_user" value="<?php echo $user->id_user ?>" />
                        <input type="hidden" name="nama_lengkap" value="<?php echo $user->nama_lengkap ?>" />
                        <input type="hidden" name="email" value="<?php echo $user->email ?>" />
                        <input type="hidden" name="password" value="<?php echo $user->password ?>" />
                        <input type="hidden" name="jenis_kelamin" value="<?php echo $user->jenis_kelamin ?>" />
                        <input type="hidden" name="nomor_hp" value="<?php echo $user->nomor_hp?>" />
                        <input class="form-control-file" type="hidden" name="foto" value="<?php echo $user->foto?>" />
                        <input class="form-control-file" type="hidden" name="old_image" value="<?php echo $user->foto ?>" />

                        <div class="form-group">
                            <label for="nama_user">Nama User : <?= $user->nama_lengkap?></label>
                        </div>

                        <div class="form-group">
                            <label for="email">Email User : <?= $user->email?></label>
                        </div>

                        <div class="form-group">
                            <label for="password">Apakah Anda ingin reset Password <?= $user->nama_lengkap?> ?</label>
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