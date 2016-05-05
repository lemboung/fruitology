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
            Tabel Gallery
            <small>Edit & Hapus Menu</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Update and Delete</a></li>
            <li class="active">Edit & Hapus Gallery</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Edit & Hapus Menu</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nama Gambar</th>
                        <th>Deskripsi Gambar</th>
                        <th>Gambar</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($data as $d) { ?>
                      <tr>
                        <td><?php echo $d['nama_pict']; ?></td>
                        <td><?php echo $d['deskripsi']; ?></td>
                        <?php if ($d['pict_gallery'] != "") { ?>
                          <td><center><img src="<?php echo base_url("/assets/image/galeri/$d[pict_gallery]");?>" style="height: 100px; width: 100px"/></center></td>
                        <?php } else { ?>
                          <td>no image</td>
                        <?php } ?>
                        <td>
                          <a href="<?php echo base_url()."gallery_edit/edit_menu/".$d['id_gallery']; ?>">Edit</a>
                          <a href="<?php echo base_url()."gallery_edit/do_delete/".$d['id_gallery']; ?>">Delete</a>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Nama Gambar</th>
                        <th>Deskripsi Gambar</th>
                        <th>Gambar</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
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
    <script src="<?php echo base_url()."assets/js/jquery.dataTables.min.js" ?>"></script>
    <script src="<?php echo base_url()."assets/js/dataTables.bootstrap.min.js" ?>"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>
