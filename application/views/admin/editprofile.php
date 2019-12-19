<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Profile</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form  action="<?= base_url('Admin/prosesedit/' . $this->session->userdata('id_admin') . '') ?>" name="form" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
          <div class="box-body">
          <input type="hidden" class="form-control" name="id_admin" value="<?= $this->session->userdata('id_admin') ?>">
            <div class="form-group">
              <label for="nama_lengkap">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $this->session->userdata('nama_lengkap') ?>">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="<?= $this->session->userdata('email_admin') ?>">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
              <label for="jenis_kelamin">Jenis Kelamin:</label>
              <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if ($this->session->userdata('jenis_kelamin') == 'Laki-laki') {echo 'checked';} ?>>Laki-Laki
              <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if ($this->session->userdata('jenis_kelamin') == 'Perempuan') {echo 'checked';} ?>>Perempuann
            </div>
            <div class="form-group">
              <label for="nomor_hp">Nomor Hp</label>
              <div class="input-group">
                <span class="input-group-addon">+62</span>
                <input type="text" class="form-control" name="nomor_hp" value="<?= $this->session->userdata('nomor_hp') ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="foto">Foto *max size 1MB</label>
              <input type="file" class="form-control" name="foto">
              <input class="form-control-file" type="hidden" name="old_image" value="<?php echo $this->session->userdata('foto') ?>" />
              <img src="<?php echo base_url('foto/admin/adminFoto/' . $this->session->userdata('foto')) ?>" width="64" />
            </div>

            <script>
                            function validateForm() {
                                var nama = document.forms["form"]["nama_lengkap"].value;
                                var email = document.forms["form"]["email"].value;
                                var pass = document.forms["form"]["password"].value;
                                var jk = document.forms["form"]["jenis_kelamin"].value;
                                var nohp = document.forms["form"]["nomor_hp"].value;

                                if (nama == "" && email == "" && pass == "" && jk == ""&& nohp == "") {
                                  alert("Semua data harus di isi");
                                    return false;
                                } else if (nama == "") {
                                    alert("Nama Harus di Isi");
                                    return false;
                                } else if (email == "") {
                                    alert("Email Harus di Isi");
                                    return false;
                                } else if (pass == "") {
                                    alert("Password Harus di Isi");
                                    return false;
                                } else if (jk == "") {
                                    alert("Jenis Kelamin Harus di Isi");
                                    return false;
                                } else if (nohp == "") {
                                    alert("Nomor Hp Harus di Isi");
                                    return false;
                                }
                            }
                        </script>

          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.box -->

    </div>
    <!--/.col (left) -->
    <!-- right column -->

    <!--/.col (right) -->
  </div>
  <!-- /.row -->
</section>
</div>