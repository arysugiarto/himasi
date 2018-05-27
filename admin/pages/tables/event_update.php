
<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 12/05/17
 * Time: 13:44
 */
session_start();
require_once "../lib/koneksi.php";
$link = connect();
$id=$_GET["Id"];
if (isset($_SESSION['username'])) {
    include "../lib2/header.php";
    ?>

<!-- User Account: style can be found in dropdown.less -->
<li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="hidden-xs"><?= $_SESSION['nama']; ?></span>
                        </a>
                            <li class="user-footer">
                                    <a href="login/logout.php" class="btn btn-danger btn-md">Logout <i class="glyphicon glyphicon-log-out"></i></a>
                            </li>
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
                </div>
                <!-- search form -->
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="../../index.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Forms</span>
                                <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="../forms/editors.php"><i class="fa fa-circle-o"></i>Post Artikel</a></li>
                            <li><a href="../forms/event.php"><i class="fa fa-circle-o"></i>Post Event</a></li>
                            <li><a href="../forms/galeri.php"><i class="fa fa-circle-o"></i>Post Galery</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-table"></i> <span>Tables</span>
                            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="../tables/data.php"><i class="fa fa-circle-o"></i> Data Artikel</a></li>
                            <li><a href="../tables/data_event.php"><i class="fa fa-circle-o"></i> Data Event</a></li>
                            <li><a href="../tables/data_galeri.php"><i class="fa fa-circle-o"></i> Data Galeri</a></li>

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
                    Text Editors
                    <small>Advanced form element</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Forms</a></li>
                    <li class="active">Editors</li>
                </ol>
            </section>
<?php $tampil_event=mysqli_query($link,"SELECT * FROM tb_event WHERE id_event='$id' "); ?>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">CK Editor
                                    <small>Advanced and full of features</small>
                                </h3>

                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                                            title="Collapse">
                                        <i class="fa fa-minus"></i></button>
                                    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                            title="Remove">
                                        <i class="fa fa-times"></i></button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <form action="update_event.php" method="post" enctype="multipart/form-data">
                                    <table>
                                      <?php
                                      while ($data_event=mysqli_fetch_array($tampil_event)){
                                      ?>
                                        <tr>
                                            <td>
                                            <label>Judul Event</label>
                                            <input  class="form-control" type="text" name="judul_event" size="150" placeholder="Judul Event" value="<?php echo $data_event['judul_event']?>" >
                                            </td>
                                        </tr>
                                        <br>
                                        <tr>
                                            <td>
                                            <label>Tanggal Event</label>
                                            <input  class="form-control" type="date" name="tanggal_event" size="50"  placeholder="" value="<?php echo $data_event['tanggal_event']?>">
                                            </td>
                                        </tr>
                                        <br>
                                        <tr>
                                            <td>
                                            <label>Waktu Event</label>
                                            <br>
                                            Waktu Mulai<input  class="form-control" type="time" name="waktu" size="50" placeholder="" value="<?php echo $data_event['waktu']?>">
                                          </td>
                                          </tr>
                                          <tr>
                                          <td> Waktu Selesai <input  class="form-control" type="time" name="waktu2" size="50" placeholder="" value="<?php echo $data_event['waktu_selesai']?>"></td>
                                        </tr>
                                        <br>
                                        <tr>
                                            <td>
                                            <label>Event Bersifat</label><br>
                                      <select class="form-control" name="sifat" value="<?php echo $data_event['sifat']?>">
                                        <option value="Free">Free</option>
                                        <option value="Bayar">Bayar</option>
                                      </select>

                                        </tr>
                                        <br>
                                        <tr>
                                            <td>
                                            <label>Harga Tiket</label>
                                            <input  class="form-control" type="text" name="tiket" size="150" placeholder="Harga Boleh kosong bila event bersifat Free" value="<?php echo $data_event['harga_tiket']?>">
                                        </tr>
                                        <br>
                                        <tr>
                                            <td>
                                            <label>Tempat Event</label>
                                         <input  class="form-control" type="text" name="tempat_event" size="150" placeholder="Tempat Event"  value="<?php echo $data_event['tempat_event']?>">
                                        </tr>
                                      <br>
                                      <tr>
                                          <td>
                                          <label>Penyelenggara Event</label>
                                          <input  class="form-control" type="text" name="by" size="150" placeholder="" value="<?php echo $data_event['penyelenggara']?>">
                                          </td>
                                      </tr>
                                        <br>
                                        <tr>
                                            <td>
                                                <label>Upload Gambar</label>
                                            <input class="form-control" type="file" name="image" >
                                            </td>
                                        </tr>
                                    <br>
                                    <tr>
                                        <td>
                                        <label>Deskripsi Event</label>
                                        <textarea id="summernote" name="artikel_event" rows="10" cols="80" value="<?php echo $data_event['artikel_event']?>"></textarea>
                                        </td>
                                        <br>
                                    </tr>
                                    <input type="hidden" name="Id" value="<?php echo $data_event['id_event']?>">
                                  <?php } ?>
                                    </table>
                                    <button type="submit"  class="btn btn-flat"><i class="fa fa-send"></i>Send</button>
                                </form>
                            </div>
                            <div>

                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                <!-- ./row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.0
            </div>
            <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                    <p>Will be 23 on April 24th</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-user bg-yellow"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                    <p>New phone +1(800)555-1234</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                    <p>nora@example.com</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-file-code-o bg-green"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                    <p>Execution time 5 seconds</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    <h3 class="control-sidebar-heading">Tasks Progress</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Custom Template Design
                                    <span class="label label-danger pull-right">70%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Update Resume
                                    <span class="label label-success pull-right">95%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Laravel Integration
                                    <span class="label label-warning pull-right">50%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Back End Framework
                                    <span class="label label-primary pull-right">68%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">General Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Report panel usage
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Some information about this general settings option
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Allow mail redirect
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Other sets of options are available
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Expose author name in posts
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Allow the user to show his name in blog posts
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <h3 class="control-sidebar-heading">Chat Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Show me as online
                                <input type="checkbox" class="pull-right" checked>
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Turn off notifications
                                <input type="checkbox" class="pull-right">
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Delete chat history
                                <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                            </label>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- CK Editor -->
    <script src="../../bower_components/ckeditor/ckeditor.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
    </body>
    </html>
    <?php
}else {
    ?>
    <script>
        alert('Silakan login dulu!');
        parent.location.href="../../login/index.html"
    </script>
    <?php
}
?>
