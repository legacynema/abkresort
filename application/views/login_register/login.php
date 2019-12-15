<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Login</title>

     <!-- FLASH DATA PEMBERITAHUAN -->
 <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
<?php endif; ?>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/floating-labels/">
    <link href="floating-labels.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" method="POST" action="<?= base_url('Auth/login_user') ?>">
        <h1 class="h3 mb-3 font-weight-normal">Login</h1> <br>
        <label for="email" class="sr-only">Email address</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
  <button class="btn btn-lg btn-info btn-block" name="submit" type="submit">Login</button>
</form>


</body></html>