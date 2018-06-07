<?php
/**
 * Created by PhpStorm.
 * User: ary
 * Date: 30/11/17
 * Time: 13:56
 */
    include "pages/lib/header.php"
   
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
            </div>
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
                Dashboard
                <small>Control panel</small>
            </h1>
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
                    <?php
                    $table="tb_artikel";
                    $sql = "SELECT count(*) AS jumlah FROM $table";
                    $query = mysqli_query($link, $sql);
                    $result = mysqli_fetch_array($query);
                    ?>
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3><?= "{$result['jumlah']}" ; ?></h3>
                            <p>Data Artikel</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-book"></i>
                        </div>
                        <a href="pages/tables/data.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <?php
                    $table="tb_event";
                    $sql = "SELECT count(*) AS jumlah1 FROM $table";
                    $query = mysqli_query($link, $sql);
                    $result = mysqli_fetch_array($query);
                    ?>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><?= "{$result['jumlah1']}" ; ?></h3>
                            <p>Data Event</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-calendar-minus-o"></i>
                        </div>
                        <a href="pages/tables/data_event.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <?php
                    $table="tb_galeri";
                    $sql = "SELECT count(*) AS jumlah2 FROM $table";
                    $query = mysqli_query($link, $sql);
                    $result = mysqli_fetch_array($query);
                    ?>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                        <h3><?= "{$result['jumlah2']}" ; ?></h3>
                            <p>Data Galeri</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-file-image-o"></i>
                        </div>
                        <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
            <!--script chat-->
          <!--  <script id="cid0020000173018569264" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 1095px;height: 350px;">
                {"handle":"desacikangkung","arch":"js","styles":{"a":"0084ef","b":100,"c":"FFFFFF","d":"FFFFFF","k":"0084ef","l":"0084ef","m":"0084ef","n":"FFFFFF","p":"10","q":"0084ef","r":100,"fwtickm":1}}
            </script>

            <div class="row">
                </section>
                <!-- /.content -->

                </div>

         <?php include "pages/lib/footer.php" ?>
</body>
</html>


