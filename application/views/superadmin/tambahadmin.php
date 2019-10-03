<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-5">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Admin</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Nama </label>
                             <input type="text" class="form-control" id="" placeholder="example : Firman Citra">   
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="example : abkresort@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Input Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">No Telepon</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Input Password">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control">
                                <option>-- Pilih Kelamin --</option>
                                <option>option 1</option>
                                <option>option 2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Upload Photos</label>
                            <input type="file" id="exampleInputFile">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-success"><i class="fa fa-send"></i> Simpan</button>
                        <button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-7">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">List Admin</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <table class="table table-hover">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>No telepon</th>
                            <th>Jenis Kelamin
                            <th>Photo Profile</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Arya</td>
                            <td>aryawiguna00@yahoo.com</td>
                            <td>332ksasa</td>
                            <td>2121221313</td>
                            <td>Laki-Laki</td>
                            <td>#</td>
                            <td><span class="badge bg-blue"><i class="fa fa-pencil"></i> Edit</span> <span class="badge bg-red"><i class="fa fa-trash"></i> Hapus</span></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
</div>