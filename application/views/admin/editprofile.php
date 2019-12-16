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
            <form role="form" method="POST" action="<?= base_url('Admin/prosesedit/'.$this->session->userdata('id_user').'') ?>">
              <div class="box-body">
                <div class="form-group">
                <input type="hidden" class="form-control" name="id_admin" value="<?= $this->session->userdata('id_user') ?>">
                  <label for="nama_admin">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama_admin" name="nama_admin"  placeholder="Nama">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="email@mail.com">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="jenis_kelamin">Jenis Kelamin</label>
                  <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="">
                </div>
                <div class="form-group">
                  <label for="nomor_hp">Nomor Hp</label>
                  <div class="input-group">
                    <span class="input-group-addon">+62</span>
                    <input type="text" class="form-control" id="nomor_hp" placeholder="">
              </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                </div>
                
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