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
                  <th>NAMA</th>
                  <th>EMAIL</th>
                  <th>JENIS KELAMIN</th>
                  <th>NOMOR HP</th>
                  <th>FOTO</th>
                  <th>MENU</th>
                </tr>
                </thead>
                    <?php foreach ($user as $usr):?>
                <tbody>
                    <td><p><?=  $usr->id_user?></p></td>
                    <td><p><?=  $usr->nama_lengkap?></p></td>
                    <td><p><?=  $usr->email?></p></td>
                    <td><p><?=  $usr->jenis_kelamin?></p></td>
                    <td><p><?=  $usr->nomor_hp?></p></td>
                    <td><p><?=  $usr->foto?></p></td>
                    <td>
                        <?php  echo anchor('Superadmin/userDelete/'.$usr->id_user, '<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?>
                    </td>


                </tbody>
                <?php endforeach ?>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>NAMA</th>
                  <th>EMAIL</th>
                  <th>JENIS KELAMIN</th>
                  <th>NOMOR HP</th>
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
      <!-- /.row -->
    </section>
</div>
               