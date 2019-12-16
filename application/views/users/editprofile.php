<div class="container mt-5 mb-5">
    <div class="row justify-content-md-center">
        <div class="col-12 col-lg-4">
            <div class="card" style="width: 18rem;">
                <div class="card-header text-center">Photo</div>
                    <img src="https://images.unsplash.com/photo-1504703395950-b89145a5425b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <?= $this->session->flashdata('berhasil'); ?>
            <h3 class="text-center mb-2">Edit Profile</h3><hr>
            <form method="POST" action="<?= base_url('Home/prosesedit') ?>">
                <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="">
                    
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="">
                </div>
                <div class="form-group">
                    <label for="nomorhp">Nomor HP</label>
                    <input type="text" class="form-control" name="nomorhp" id="nomorhp" placeholder="">
                </div>
                <div class="form-group">
                    <label for="foto">Upload Foto</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="foto" id="foto">
                        <label class="custom-file-label" for="foto">Choose file</label>
                    </div>
                </div>
                <a href="<?= base_url('Home/myaccount') ?>" class="btn btn-success btn-md"><i class="fas fa-arrow-left"></i> Back to Profile</a>
                <button type="submit" name="Simpan" class="btn btn-primary btn-md">Simpan</button>
                
            </form>
        </div>

    </div>
</div>