<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 03/07/18
 * Time: 06:16
 */

$data_artikel = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>HIMA SI | Himpunan Mahasiswa Sistem Informasi </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Chrome, Firefox OS, Opera and Vivaldi -->
    <meta name="theme-color" content="#0575e6">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">

    <!-- Costum style CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/set2.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
<!-- ini bagian header yang ke-dua -->
<nav class="navbar navbar-default navbar-default-2 wow fadeIn">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-hima" href="index.php"><img src="assets/image/logohimasi.png" width="50">hima si</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">home</a></li>
                <li class="dropdown">
                    <a href="#" >tentang <span class="caret"></span></a>
                    <ul class="dropdown-menu animated fadeIn">
                        <li><a href="#">sejarah</a></li>
                        <li><a href="#">ketua hima</a></li>
                        <li><a href="#">visi - misi</a></li>
                        <li><a href="#">divisi</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" >gallery <span class="caret"></span></a>
                    <ul class="dropdown-menu animated fadeIn">
                        <li><a href="#">pengurus</a></li>
                        <li><a href="#">angkatan muda</a></li>
                        <li><a href="#">alumni</a></li>
                        <li><a href="#">kegiatan</a></li>
                    </ul>
                </li>
                <li><a href="#">kontak</a></li>
                <li><a href="event-page.php">events</a></li>
                <li><a href="blog-page.php">blog</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" type="button" class="btn btn-default-2 wow bounceIn" data-wow-delay=".4s" style="padding: 10px 15px; vertical-align: middle; margin: 5px;">daftar hima si</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<div class="hima-header-2 wow fadeIn">
    <div class="image-gradient-2">
        <div class="container">
            <div class="himaheader-inner-2">
                <h3>Halaman Blog Hima SI</h3>
            </div>
        </div>
    </div>
</div>
<!-- end header ke-dua -->

<!-- breadcrumb hima nya bro -->
<div id="breadcumb-hima">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Blog Page</li>
        </ol>
    </div>
</div> <!-- end -->
<?php
require_once "admin/pages/lib/koneksi.php";
$link = connect();

$batas   =5;
$halaman =@$_GET['halaman'];
if (empty($halaman)){
    $posisi =0;
    $halaman=1;
}
else{
    $posisi =($halaman-1)*$batas;
}
?>
<?php $tampil_artikel=mysqli_query($link,"SELECT * FROM tb_artikel WHERE id_artikel='$data_artikel' LIMIT  $posisi,$batas"); ?>
<div class="post-section">
    <div class="container">
        <div class="row blog-post">
            <?php
            while ($data_artikel=mysqli_fetch_array($tampil_artikel)){
            ?>
            <div class="col-md-4 blog-post-inner">
                <div class="thumbnail">
                    <a href="article-page.html"><img src="admin/pages/forms/img/img_artikel/<?php echo $data_artikel['gambar_artikel']?>" alt="dalih" class="blog-image"></a>
                    <div class="caption">
                        <a href=""><span class="label" style="background-color: #13CE66; border-radius: 0; border-bottom-right-radius: .50em; padding: 3px 8px;">Pendidikan</span></a> <br><br>
                        <a href="article-page.html" class="blog-title"><?php echo $data_artikel['judul_artikel']?></a>
                        <div class="tgl-posting">
                            <div class="date">
                                <span><?php echo $data_artikel['tanggal'] ?></span>
                            </div>
                            <div class="view">
					        			<span><i class="fa fa-eye"></i>
					        			187</span>
                            </div>
                        </div>
                        <div class="post-footer">
                            <div class="photo-admin">
                                <img src="assets/image/dalih.jpg" class="img-admin" width="15" height="15">
                            </div>
                            <div class="nama-admin">
                                <a href="#" class="name">Dalih Rusmana</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php
            $tampil_artikel2     =mysqli_query($link, "SELECT * FROM tb_artikel");
            $jmldata    =mysqli_num_rows($tampil_artikel2);
            $jmlhalaman =ceil($jmldata/$batas);
            ?>
            <!--<div class="col-md-4 blog-post-inner">
                <div class="thumbnail">
                    <a href="#"><img src="assets/image/image-1.jpeg" alt="dalih" class="blog-image"></a>
                    <div class="caption">
                        <a href=""><span class="label" style="background-color: #13CE66; border-radius: 0; border-bottom-right-radius: .50em; padding: 3px 8px;">Pendidikan</span></a> <br><br>
                        <a href="#" class="blog-title">Cara Meningkatkan Motivasi dalam Berorganisasi</a>
                        <div class="tgl-posting">
                            <div class="date">
                                <span>22 Juni, 2018</span>
                            </div>
                            <div class="view">
					        			<span><i class="fa fa-eye"></i>
					        			187</span>
                            </div>
                        </div>
                        <div class="post-footer">
                            <div class="photo-admin">
                                <img src="assets/image/dalih.jpg" class="img-admin" width="15" height="15">
                            </div>
                            <div class="nama-admin">
                                <a href="#" class="name">Dalih Rusmana</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4 blog-post-inner">
                <div class="thumbnail">
                    <a href="#"><img src="assets/image/image-1.jpeg" alt="dalih" class="blog-image"></a>
                    <div class="caption">
                        <a href=""><span class="label" style="background-color: #13CE66; border-radius: 0; border-bottom-right-radius: .50em; padding: 3px 8px;">Pendidikan</span></a> <br><br>
                        <a href="#" class="blog-title">Cara Meningkatkan Motivasi dalam Berorganisasi</a>
                        <div class="tgl-posting">
                            <div class="date">
                                <span>22 Juni, 2018</span>
                            </div>
                            <div class="view">
					        			<span><i class="fa fa-eye"></i>
					        			187</span>
                            </div>
                        </div>
                        <div class="post-footer">
                            <div class="photo-admin">
                                <img src="assets/image/dalih.jpg" class="img-admin" width="15" height="15">
                            </div>
                            <div class="nama-admin">
                                <a href="#" class="name">Dalih Rusmana</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4 blog-post-inner">
                <div class="thumbnail">
                    <a href="#"><img src="assets/image/image-1.jpeg" alt="dalih" class="blog-image"></a>
                    <div class="caption">
                        <a href=""><span class="label" style="background-color: #13CE66; border-radius: 0; border-bottom-right-radius: .50em; padding: 3px 8px;">Pendidikan</span></a> <br><br>
                        <a href="#" class="blog-title">Cara Meningkatkan Motivasi dalam Berorganisasi</a>
                        <div class="tgl-posting">
                            <div class="date">
                                <span>22 Juni, 2018</span>
                            </div>
                            <div class="view">
					        			<span><i class="fa fa-eye"></i>
					        			187</span>
                            </div>
                        </div>
                        <div class="post-footer">
                            <div class="photo-admin">
                                <img src="assets/image/dalih.jpg" class="img-admin" width="15" height="15">
                            </div>
                            <div class="nama-admin">
                                <a href="#" class="name">Dalih Rusmana</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4 blog-post-inner">
                <div class="thumbnail">
                    <a href="#"><img src="assets/image/image-1.jpeg" alt="dalih" class="blog-image"></a>
                    <div class="caption">
                        <a href=""><span class="label" style="background-color: #13CE66; border-radius: 0; border-bottom-right-radius: .50em; padding: 3px 8px;">Pendidikan</span></a> <br><br>
                        <a href="#" class="blog-title">Cara Meningkatkan Motivasi dalam Berorganisasi</a>
                        <div class="tgl-posting">
                            <div class="date">
                                <span>22 Juni, 2018</span>
                            </div>
                            <div class="view">
					        			<span><i class="fa fa-eye"></i>
					        			187</span>
                            </div>
                        </div>
                        <div class="post-footer">
                            <div class="photo-admin">
                                <img src="assets/image/dalih.jpg" class="img-admin" width="15" height="15">
                            </div>
                            <div class="nama-admin">
                                <a href="#" class="name">Dalih Rusmana</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4 blog-post-inner">
                <div class="thumbnail">
                    <a href="#"><img src="assets/image/image-1.jpeg" alt="dalih" class="blog-image"></a>
                    <div class="caption">
                        <a href=""><span class="label" style="background-color: #13CE66; border-radius: 0; border-bottom-right-radius: .50em; padding: 3px 8px;">Pendidikan</span></a> <br><br>
                        <a href="#" class="blog-title">Cara Meningkatkan Motivasi dalam Berorganisasi</a>
                        <div class="tgl-posting">
                            <div class="date">
                                <span>22 Juni, 2018</span>
                            </div>
                            <div class="view">
					        			<span><i class="fa fa-eye"></i>
					        			187</span>
                            </div>
                        </div>
                        <div class="post-footer">
                            <div class="photo-admin">
                                <img src="assets/image/dalih.jpg" class="img-admin" width="15" height="15">
                            </div>
                            <div class="nama-admin">
                                <a href="#" class="name">Dalih Rusmana</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4 blog-post-inner">
                <div class="thumbnail">
                    <a href="#"><img src="assets/image/image-1.jpeg" alt="dalih" class="blog-image"></a>
                    <div class="caption">
                        <a href=""><span class="label" style="background-color: #13CE66; border-radius: 0; border-bottom-right-radius: .50em; padding: 3px 8px;">Pendidikan</span></a> <br><br>
                        <a href="#" class="blog-title">Cara Meningkatkan Motivasi dalam Berorganisasi</a>
                        <div class="tgl-posting">
                            <div class="date">
                                <span>22 Juni, 2018</span>
                            </div>
                            <div class="view">
					        			<span><i class="fa fa-eye"></i>
					        			187</span>
                            </div>
                        </div>
                        <div class="post-footer">
                            <div class="photo-admin">
                                <img src="assets/image/dalih.jpg" class="img-admin" width="15" height="15">
                            </div>
                            <div class="nama-admin">
                                <a href="#" class="name">Dalih Rusmana</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4 blog-post-inner">
                <div class="thumbnail">
                    <a href="#"><img src="assets/image/image-1.jpeg" alt="dalih" class="blog-image"></a>
                    <div class="caption">
                        <a href=""><span class="label" style="background-color: #13CE66; border-radius: 0; border-bottom-right-radius: .50em; padding: 3px 8px;">Pendidikan</span></a> <br><br>
                        <a href="#" class="blog-title">Cara Meningkatkan Motivasi dalam Berorganisasi</a>
                        <div class="tgl-posting">
                            <div class="date">
                                <span>22 Juni, 2018</span>
                            </div>
                            <div class="view">
					        			<span><i class="fa fa-eye"></i>
					        			187</span>
                            </div>
                        </div>
                        <div class="post-footer">
                            <div class="photo-admin">
                                <img src="assets/image/dalih.jpg" class="img-admin" width="15" height="15">
                            </div>
                            <div class="nama-admin">
                                <a href="#" class="name">Dalih Rusmana</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4 blog-post-inner">
                <div class="thumbnail">
                    <a href="#"><img src="assets/image/image-1.jpeg" alt="dalih" class="blog-image"></a>
                    <div class="caption">
                        <a href=""><span class="label" style="background-color: #13CE66; border-radius: 0; border-bottom-right-radius: .50em; padding: 3px 8px;">Pendidikan</span></a> <br><br>
                        <a href="#" class="blog-title">Cara Meningkatkan Motivasi dalam Berorganisasi</a>
                        <div class="tgl-posting">
                            <div class="date">
                                <span>22 Juni, 2018</span>
                            </div>
                            <div class="view">
					        			<span><i class="fa fa-eye"></i>
					        			187</span>
                            </div>
                        </div>
                        <div class="post-footer">
                            <div class="photo-admin">
                                <img src="assets/image/dalih.jpg" class="img-admin" width="15" height="15">
                            </div>
                            <div class="nama-admin">
                                <a href="#" class="name">Dalih Rusmana</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>-->
        </div>
        <nav aria-label="Page navigation">
            <?php
            for ($i=1;$i<=$jmlhalaman;$i++)
                if ($i != $halaman){
                    echo "<a href=\"blog-page.php?halaman=$i\">$i</a> | ";
                }
                else {

                    ?>
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#"><?php echo $i ?></a></li>
                        <!--<li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>-->
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>

                    </ul>
                <?php  } ?>
        </nav>
    </div>
</div>
</div>

<footer>
    <div class="gradient">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-4 col-xs-6 footer-col">
                    <ul>
                        <li class="head-list">Gallery</li>
                        <li><a href="">Pengurus</a></li>
                        <li><a href="">Angkatan Muda</a></li>
                        <li><a href="">Alumni</a></li>
                        <li><a href="">Kegiatan</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-xs-6 footer-col">
                    <ul>
                        <li class="head-list">Tentang</li>
                        <li><a href="">Sejarah</a></li>
                        <li><a href="">Ketua Hima</a></li>
                        <li><a href="">Visi Misi</a></li>
                        <li><a href="">Divisi</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-xs-12 footer-col">
                    <a class="navbar-hima" href="#"><img src="assets/image/logohimasi.png" width="50">hima si</a>
                    <p>Himpunan Mahasiswa Sistem <br>
                        Informasi. Universitas Komputer <br>
                        Indonesia. </p>
                </div>
                <div class="col-md-12 developer">
                    <p>&copy; 2018. All Rights Reserved. Developed by <a href="https://www.instagram.com/dalihrusmana/">Dalih Rusmana</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>



<!-- jquary -->
<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/sticky-kit.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/dropdown.js"></script>
<script type="text/javascript" src="assets/js/slick.min.js"></script>
<script type="text/javascript" src="assets/js/wow.min.js"></script>

<!-- script slick center -->
<script type="text/javascript">
    $('.autoplay').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });

    /* baaguetteBox js library */
    baguetteBox.run('.gallery');

    /* wow js library */
    wow = new WOW(
        {
            animateClass: 'animated',
            offset:       100,
            callback:     function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
        var section = document.createElement('section');
        section.className = 'section--purple wow fadeInDown';
        this.parentNode.insertBefore(section, this);
    };
</script>
</body>
</html>
