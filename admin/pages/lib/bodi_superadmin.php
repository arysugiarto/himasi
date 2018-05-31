<body>
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
                        <i class="fa fa-dashboard"></i> <span>Dashboard </span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="index.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
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
                        <li><a href="pages/forms/editors.php"><i class="fa fa-circle-o"></i>Post Artikel</a></li>
                        <li><a href="pages/forms/event.php"><i class="fa fa-circle-o"></i>Post Event</a></li>
                        <li><a href="pages/forms/galeri.php"><i class="fa fa-circle-o"></i>Post Galery</a></li>
                        <li><a href="pages/forms/tampilan.php"><i class="fa fa-circle-o"></i>Update Tampilan</a></li>
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
                        <li><a href="pages/tables/data.php"><i class="fa fa-circle-o"></i> Data Artikel</a></li>
                        <li><a href="pages/tables/data_event.php"><i class="fa fa-circle-o"></i> Data Event</a></li>
                        <li><a href="pages/tables/data_galeri.php"><i class="fa fa-circle-o"></i> Data Galeri</a></li>
                        <li><a href="pages/tables/daftar_admin.php"><i class="fa fa-circle-o"></i>Daftar Admin</a></li>
                    </ul>
                </li>
               </span>
                    </a>
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
                <small>Control panel</small>
            </h1><br>
            <button type="button" class="btn btn-info btn-sm" id="myBtn" ><i class="glyphicon glyphicon-plus"></i> Tambah Admin</button>
            <a href="pages/tables/daftar_admin.php"><button type="button" class="btn btn-info btn-sm" ><i class="glyphicon glyphicon-plus"></i> Daftar Admin</button>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>150</h3>

                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>
                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>44</h3>

                            <p>User Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>65</h3>

                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        </div>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
 <?php
require_once 'koneksi.php';
$link=connect();

if(isset($_POST['kirim'])){


$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];

$insert = "INSERT INTO tb_admin(id_admin,Nama,Username,Password,level) values('','$nama','$username','$password','2')";
$kirim = mysqli_query($link, $insert);
if ($kirim){
    echo "<script>alert('berhasil cuuuu');</script>";
    header("location:index.php");
    
}
else{
    header("location:index.php");
}
}
?>

        !-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-edit"></span>Tambah Admin</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <form action='' method="post">
         
          <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-credit-card"></span> Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="psw" placeholder="Enter password">
            </div>
              <button type="submit" name="kirim" class="btn btn-success btn-block"><span class="glyphicon glyphicon-plus"></span> Tambah</button>
        </form>
        </div>
      </div>
      
    </div>
  </div> 
</div>
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>