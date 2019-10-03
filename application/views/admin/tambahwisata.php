<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Wisata</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Nama Kota</label>
                            <select class="form-control">
                                <option>-- Pilih Kota --</option>
                                <option>option 2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Tempat Wisata</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Green Park">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Harga Tiket/orang</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input type="text" class="form-control" placeholder="Rp.">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Simpan</button>
                        <button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">List Wisata</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <table class="table table-hover">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Kota</th>
                            <th>Tempat Wisata</th>
                            <th>Harga Tiket</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Batu</td>
                            <td>Jatim Park 3</td>
                            <td>Rp. 50000</td>
                            <td><span class="badge bg-blue"><i class="fa fa-pencil"></i> Edit</span> <span class="badge bg-red"><i class="fa fa-trash"></i> Hapus</span></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
</div>