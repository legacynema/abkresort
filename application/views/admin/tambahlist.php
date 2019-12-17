<section class="content">
  <div class="row">
    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Jenis Tempat</h3>
        </div>
        <!-- FLASH DATA PEMBERITAHUAN -->
        <?php if ($this->session->flashdata('success1')) : ?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Alert!</h4>
            <?php echo $this->session->flashdata('success1'); ?>
          </div>
        <?php endif; ?>
        <form action="<?php echo base_url() . 'Admin/listTtAdd'; ?>" name="form1" onsubmit="return validateForm1()" method="post" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="nama">Nama Jenis Tempat Transportasi</label>
              <input type="text" class="form-control" name="nama" placeholder="ex: Bandara">
            </div>
          </div>

          <script>
            function validateForm1() {
              var nama = document.forms["form1"]["nama"].value;

              if (nama == "") {
                alert("Nama Jenis Tempat Transportasi harus di isi");
                return false;
              }
            }
          </script>

          <div class="box-footer">
            <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Simpan</button>
            <button type="reset" class="btn btn-warning"><i class="fa fa-refresh"></i> Reset</button>
          </div>
        </form>
      </div>

      <div class="col-md-10">

        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">List Jenis Tempat</h3>
          </div>
          <!-- FLASH DATA PEMBERITAHUAN -->
          <?php if ($this->session->flashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-check"></i> Alert!</h4>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php endif; ?>


          <div class="box-body">
            <table id="example1" class="table table-hover table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>NAMA TEMPAT</th>
                  <th>MENU</th>
                </tr>
              </thead>

              <tbody>
                <?php foreach ($jenis_tempat as $tm) : ?>
                  <tr>
                    <td>
                      <p><?= $tm->id_jenis ?></p>
                    </td>

                    <td>
                      <p><?= $tm->nama ?></p>
                    </td>

                    <td>
                      <?php echo anchor('Admin/listTtDelete/' . $tm->id_jenis, '<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>

              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>NAMA TRANSPORT</th>
                  <th>MENU</th>
                </tr>
              </tfoot>
            </table>
          </div>

        </div>

      </div>
      <!-- /.col -->

    </div>

    <div class="col-md-4">

      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Jenis Transportasi</h3>
        </div>
        <!-- FLASH DATA PEMBERITAHUAN -->
        <?php if ($this->session->flashdata('success2')) : ?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Alert!</h4>
            <?php echo $this->session->flashdata('success2'); ?>
          </div>

        <?php endif; ?>


        <form action="<?php echo base_url() . 'Admin/listJtAdd'; ?>" name="form2" onsubmit="return validateForm2()" method="post" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="nama_transport">Nama Jenis Transportasi</label>
              <input type="text" class="form-control" name="nama_transport" placeholder="ex: Pesawat">
            </div>
          </div>

          <script>
            function validateForm2() {
              var nama = document.forms["form2"]["nama_transport"].value;

              if (nama == "") {
                alert("Nama Jenis Transportasi harus di isi");
                return false;
              }
            }
          </script>

          <div class="box-footer">
            <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Simpan</button>
            <button type="reset" class="btn btn-warning"><i class="fa fa-refresh"></i> Reset</button>
          </div>
        </form>
      </div>
      <div class="col-md-10">

        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">List Jenis Transportasi</h3>
          </div>
          <!-- FLASH DATA PEMBERITAHUAN -->
          <?php if ($this->session->flashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-check"></i> Alert!</h4>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php endif; ?>
          <div class="box-body">
            <table id="example2" class="table table-hover table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>NAMA TRANSPORT</th>
                  <th>MENU</th>
                </tr>
              </thead>

              <tbody>
                <?php foreach ($jenis_transport as $jt) : ?>
                  <tr>
                    <td>
                      <p><?= $jt->id_transport ?></p>
                    </td>

                    <td>
                      <p><?= $jt->nama_transport ?></p>
                    </td>

                    <td>
                      <?php echo anchor('Admin/listJtDelete/' . $jt->id_transport, '<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>

              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>NAMA TRANSPORT</th>
                  <th>MENU</th>
                </tr>
              </tfoot>

            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Detail Tempat Transportasi</h3>
        </div>

        <form action="<?php echo base_url() . 'Admin/listTempTAdd'; ?>" name="form3" onsubmit="return validateForm3()" method="post" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="tempat_transport_detail">Nama Tempat Transportasi</label>
              <input type="text" class="form-control" name="nama_tempat" placeholder="ex: Bandara Juanda">
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
              <label for="jenis_tempat">Jenis Tempat</label>
              <select class="form-control" name="jenis_tempat">
                <option value="" disabled selected>Pilih Tempat</option>
                <?php foreach ($jenis_tempat as $jt) : ?>
                  <option value="<?= $jt->id_jenis ?>"><?= $jt->nama ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <script>
              function validateForm3() {
                var nama = document.forms["form3"]["nama_tempat"].value;
                var kota = document.forms["form3"]["id_kota"].value;
                var jenis = document.forms["form3"]["jenis_tempat"].value;

                if (nama == "" && kota == "" && jenis == "") {
                  alert("Data Tempat Transportasi harus di isi");
                  return false;
                } else if (nama == "") {
                  alert("Nama Tempat Transportasi harus di isi");
                  return false;
                } else if (kota == "") {
                  alert("Kota harus di isi");
                  return false;
                } else if (jenis == "") {
                  alert("Jenis Tempat harus di isi");
                  return false;
                }
              }
            </script>


            <div class="box-footer">
              <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Simpan</button>
              <button type="reset" class="btn btn-warning"><i class="fa fa-refresh"></i> Reset</button>
            </div>
        </form>
      </div>

      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">List Detail Tempat Transportasi</h3>
          </div>
          <!-- FLASH DATA PEMBERITAHUAN -->
          <?php if ($this->session->flashdata('success3')) : ?>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-check"></i> Alert!</h4>
              <?php echo $this->session->flashdata('success3'); ?>
            </div>
          <?php endif; ?>
          <div class="box-body">
            <table id="example3" class="table table-hover table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>NAMA TEMPAT</th>
                  <th>JENIS TEMPAT</th>
                  <th>KOTA</th>
                  <th>MENU</th>
                </tr>
              </thead>

              <tbody>
                <?php foreach ($tempat_transport as $jt) : ?>
                  <tr>
                    <td>
                      <p><?= $jt->id_tempat ?></p>
                    </td>

                    <td>
                      <p><?= $jt->nama_tempat ?></p>
                    </td>

                    <td>
                      <p><?= $jt->jenis_tempat ?></p>
                    </td>

                    <td>
                      <p><?= $jt->id_kota ?></p>
                    </td>

                    <td>
                      <?php echo anchor('Admin/listTempDelete/' . $jt->id_tempat, '<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?>
                    </td>

                  </tr>
                <?php endforeach; ?>
              </tbody>

              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>NAMA TEMPAT</th>
                  <th>JENIS TEMPAT</th>
                  <th>KOTA</th>
                  <th>MENU</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>