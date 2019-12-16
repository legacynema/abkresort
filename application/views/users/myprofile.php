<div class="container mt-5 mb-5">
    <div class="row justify-content-md-center">
        <div class="col-12 col-lg-4">
            <div class="card" style="width: 18rem;">
                <div class="card-header text-center">Photo</div>
                    <img src="https://images.unsplash.com/photo-1504703395950-b89145a5425b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <h3 class="text-center mb-2">Profile User</h3><hr>
            <form>
            <fieldset disabled>
            <?php foreach($user as $list) : ?>
                <div class="form-group">
                        <label for="inputEmail4">Nama Lengkap</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="<?= $list->nama_lengkap ?>">
                    </div>
                <div class="form-group">
                    <label for="inputAddress">Email</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="<?= $list->email ?>">
                </div>
                <div class="form-group">
                    <label for="inputAddress">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="<?= $list->jenis_kelamin ?>">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Nomor HP</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="<?= $list->nomor_hp ?>">
                </div>
                </fieldset>
                <a href="<?= base_url() ?>" class="btn btn-success btn-md"><i class="fas fa-arrow-left"></i> Back Home</a>
                <a href="<?= base_url('Home/editprofile') ?>" class="btn btn-primary btn-md">Edit Profile</a>
            <?php endforeach;?>
            </form>
        </div>

    </div>
</div>