<?php session_start();
  if (!isset($_SESSION["berhasil_login"])) {
    redirect('login');
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?php echo base_url("/assets/image/icon.png") ?>" />
    <title>Fruitology Admin Panel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/bootstrap.min.css" ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/AdminLTE.min.css" ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/skin-green-light.min.css" ?>">

  </head>
  <body class="hold-transition skin-green-light sidebar-mini">
        <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url("")."home_admin"; ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><center><b>F</b></center></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Fruitology's</b> Admin</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url()."assets/image/foto-admin.jpg" ?>" class="user-image" alt="User Image">
                  <span class="hidden-xs">Fruitology Admin</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url()."assets/image/foto-admin.jpg" ?>" class="img-circle" alt="User Image">
                    <p>
                      Fruitology
                      <small>Admin</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="<?php echo base_url()."login/proses_logout"; ?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
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
              <img src="<?php echo base_url()."assets/image/foto-admin.jpg" ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Fruitology</p>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Insert</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url("")."bahan_add"; ?>"><i class="fa fa-circle-o"></i>Tambah bahan</a></li>
                <li><a href="<?php echo base_url("")."gallery_add"; ?>"><i class="fa fa-circle-o"></i>Tambah Gallery</a></li>
                <li><a href="<?php echo base_url("")."resep_add"; ?>"><i class="fa fa-circle-o"></i>Tambah Resep</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Update and Delete</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url()."bahan_edit"; ?>"><i class="fa fa-circle-o"></i>Edit & Hapus Bahan</a></li>
                <li><a href="<?php echo base_url()."gallery_edit"; ?>"><i class="fa fa-circle-o"></i>Edit & Hapus Galeri</a></li>
                <li><a href="<?php echo base_url()."resep_edit"; ?>"><i class="fa fa-circle-o"></i>Edit & Hapus resep</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Edit Menu
            <!-- <small>Preview</small> -->
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Edit & Hapus Bahan</a></li>
            <li class="active">Edit Bahan</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-push-3 col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Menu</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="<?php echo base_url()."bahan_edit/do_update"; ?>" enctype="multipart/form-data">
                  <input type="text" name="id_bahan" value="<?php echo "$data[id_bahan]"; ?>" hidden/>
                  <div class="box-body">
                    <div class="form-group">
                      <label>Nama Bahan</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Menu" name="nama_bahan" value="<?php echo "$data[nama_bahan]"; ?>" required>
                    </div>
                    <div class="form-group">
                      <label>Resep</label>
                      <br><small><?php echo "Resep sebelum diupdate: <b>".$data['judul_resep']."</b>" ?></small>
                      <select class="form-control" name="resep">
                        <?php foreach ($data2 as $d) {
                          echo "<option value='$d[id_resep]'>$d[judul_resep]</option>";
                        } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Penjelasan</label>
                      <textarea class="form-control" rows="3" placeholder="Masukkan Penjelasan" name="deskripsi"><?php echo "$data[deskripsi]"; ?></textarea>
                    </div>
                    <!-- <div class="form-group">
                      <label>Gambar Makanan/Minuman</label>
                      <?php if ($data['gambar_bahan'] != 0) { ?>
                        <center><br><img src="<?php echo base_url("/assets/image/bahan/$data[gambar_bahan]"); ?>" style="height: 100px; width: 100px"><br><small>preview image</small><br></center>
                      <?php } else{ ?>
                        <center><br>no image<br><small>preview image</small><br></center>
                      <?php } ?>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Gambar Makanan/Minuman" name="gambar_makanan" value="<?php echo "$data[gambar_bahan]"; ?>">
                    </div> -->
                    <!-- PENTING!!! -->
                    <div class="form-group">
                      <label>Gambar Menu</label>
                      <?php if ($data['gambar_bahan'] != "") { ?>
                        <center><br><img src="<?php echo base_url("/assets/image/bahan/$data[gambar_bahan]"); ?>" style="height: 100px; width: 100px"><br><small>preview image</small><br></center>
                      <?php } else{ ?>
                        <center><br>no image<br><small>preview image</small><br></center>
                      <?php } ?>
                      <input type="file" id="exampleInputFile" name="gambar_bahan">
                      <!-- <p class="help-block">Example block-level help text here.</p> -->
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <b>Fruitology 2016</b>
      </footer>
    </div><!-- ./wrapper -->


    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url()."assets/js/jQuery-2.1.4.min.js" ?>"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url()."assets/js/bootstrap.min.js" ?>"></script>
    <script src="<?php echo base_url()."assets/js/app.min.js" ?>"></script>
  </body>
</html>
