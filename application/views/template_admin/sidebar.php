<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">

      <!-- Logo -->
      <a href="<?= base_url('Admin') ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>ABK</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>ABK</b>Resort</span>
      </a>

      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                        page and may cause design problems
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-red"></i> 5 new members joined
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-user text-red"></i> You changed your username
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url('assets_admin/') ?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Alexander Pierce</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?= base_url('assets_admin/') ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>

      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?= base_url('assets_admin/') ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li><a href="<?= base_url('Admin') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

          <!-- TAMBAH DATA -->
          <?php if (($this->uri->segment(2) == "tambah_penginapan") || ($this->uri->segment(2) == "tambah_transport") || ($this->uri->segment(2) == "tambah_wisata")) : ?>
            <li class="active treeview menu-open">
              <a href="#">
                <i class="fa fa-user-plus"></i>
                <span>Tambah Data</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if ($this->uri->segment(2) == "tambah_penginapan") : ?>
                  <li class="active"><a href="<?= base_url('Admin/tambah_penginapan') ?>"><i class="fa fa-circle-o"></i> Data Penginapan</a></li>
                  <li><a href="<?= base_url('Admin/tambah_transport') ?>"><i class="fa fa-circle-o"></i> Data Transport</a></li>
                  <li><a href="<?= base_url('Admin/tambah_wisata') ?>"><i class="fa fa-circle-o"></i> Data Wisata</a></li>

                <?php elseif ($this->uri->segment(2) == "tambah_transport") : ?>
                  <li><a href="<?= base_url('Admin/tambah_penginapan') ?>"><i class="fa fa-circle-o"></i> Data Penginapan</a></li>
                  <li class="active"><a href="<?= base_url('Admin/tambah_transport') ?>"><i class="fa fa-circle-o"></i> Data Transport</a></li>
                  <li><a href="<?= base_url('Admin/tambah_wisata') ?>"><i class="fa fa-circle-o"></i> Data Wisata</a></li>

                <?php elseif ($this->uri->segment(2) == "tambah_wisata") : ?>
                  <li><a href="<?= base_url('Admin/tambah_penginapan') ?>"><i class="fa fa-circle-o"></i> Data Penginapan</a></li>
                  <li><a href="<?= base_url('Admin/tambah_transport') ?>"><i class="fa fa-circle-o"></i> Data Transport</a></li>
                  <li class="active"><a href="<?= base_url('Admin/tambah_wisata') ?>"><i class="fa fa-circle-o"></i> Data Wisata</a></li>
                <?php endif; ?>
              </ul>
            </li>
            </li>
          <?php else : ?>
            <li class="treeview ">
              <a href="#">
                <i class="fa fa-user-plus"></i>
                <span>Tambah Data</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?= base_url('Admin/tambah_penginapan') ?>"><i class="fa fa-circle-o"></i> Data Penginapan</a></li>
                <li><a href="<?= base_url('Admin/tambah_transport') ?>"><i class="fa fa-circle-o"></i> Data Transport</a></li>
                <li><a href="<?= base_url('Admin/tambah_wisata') ?>"><i class="fa fa-circle-o"></i> Data Wisata</a></li>
              </ul>
            </li>
            </li>
          <?php endif; ?>
          <!-- LIST USER -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-list"></i> <span>List User</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> User Aktif</a></li>
              <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> User NonAktif</a></li>
            </ul>
          </li>
          <li><a href="https://adminlte.io/docs"><i class="fa fa-money"></i> <span>Transaksi</span></a></li>
          <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Laporan</span></a></li>
          <li><a href="<?= base_url('Admin/loginadmin') ?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <?php
          // print_r($this->uri->segment(1));
          // die;
          ?>
          <?php
          if ($this->uri->segment(2) == "tambah_penginapan") : ?>
            <li class="active">Tambah Penginapan</li>
          <?php elseif ($this->uri->segment(2) == "tambah_transport") : ?>
            <li class="active">Tambah Transport</li>
          <?php elseif ($this->uri->segment(2) == "tambah_wisata") : ?>
            <li class="active">Tambah Wisata</li>
          <?php else : ?>
            <li class="active">Dashboard</li>
          <?php endif;
          ?>
        </ol>
      </section>