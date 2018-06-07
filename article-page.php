<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 03/07/18
 * Time: 06:14
 */
 require_once "admin/pages/lib/koneksi.php";
 $link = connect();
$id =$_GET['Id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="assets/image/logoman.png">

    <title>MAN 3 SUKABUMI</title>
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
            <a class="navbar-hima" href="index.php"><img src="assets/image/logoman.png" width="50">MAN 3 Sukabumi</a>
        </div>

       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">home</a></li>
                <li><a href="tentang.php" >tentang </a></li>
                <li> <a href="gallery-page.php" >gallery </a></li>
                <li><a href="event-page.php">events</a></li>
                <li><a href="blog-page.php">blog</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<div class="hima-header-2 wow fadeIn visi">
    <div class="image-gradient-2">
        <div class="container">
            <div class="himaheader-inner-2">
                <h3>Artikel</h3>
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
            <li class="active">Halaman Artikel</li>
        </ol>
    </div>
</div> <!-- end -->

<?php
$tampil_artikel  = mysqli_query($link,"SELECT  *, tb_admin.Nama FROM tb_artikel JOIN tb_admin ON tb_artikel.id_admin=tb_admin.id_admin WHERE id_artikel='$id' ");
?>
<section id="article-section">
    <div class="container">
        <div class="row">
           <?php while ($data_artikel = mysqli_fetch_array($tampil_artikel)){?>
            <div class="col-xs-12 col-md-8 bg-artikel">
                <img src="admin/pages/forms/img/img_artikel/<?php  echo $data_artikel['gambar_artikel']?>"  width="500" height="300"class="image-artikel">
                <div class="post-artikel">
                    <h1><?php echo $data_artikel['judul_artikel']?></h1>
                    <div class="tgl-posting">
                        <div class="date">
                            <span><?php echo $data_artikel['tanggal']?></span>
                        </div>
                    <!--<div class="view">
					       	<span><i class="fa fa-eye"></i>
					        	187</span>
                      </div>-->
                    </div>
                    <div class="post-footer">
                            <div class="photo-admin">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="nama-admin">
                                <?= $data_artikel['Nama'] ?>
                            </div>
                        </div>
                    <div class="deskripsi deskripsi-2">
                        <!--<p><p>Salam Mahasiswa !!&nbsp;</p>-->
                        <p><?php echo  $data_artikel['isi_artikel'] ?></p>

                    </div>
                </div>
            </div>
              <?php } ?>
            <div class="col-xs-12 col-md-4">
                <aside class="widget-aside bg-artikel sidebar">
                    <div class="widget popular-post">
                        <div class="title-popular">
                            <h3>Popular Post</h3>
                        </div>

                        <div class="content-popular">
                            <ul class="media-list">
                              <?php if (mysqli_num_rows($popular)) { ?>
                                 <?php while ($data_artikel = mysqli_fetch_array($popular)) { ?>
                                <li class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="assets/image/image-1.jpeg" alt="image-1" width="64">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading"><?php echo $data_artikel['judul_event'] ?></a>
                                    </div>
                                </li>
                              <?php } ?>
                            <?php } ?>
                                <!--<li class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="assets/image/image-2.jpg" alt="image-1" width="64">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading">Workshop bersama bapak Dalih Rusmana sebagai Ahli IT</a>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="assets/image/image-3.jpeg" alt="image-1" width="64">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading">Workshop bersama bapak Dalih Rusmana sebagai Ahli IT</a>
                                    </div>
                                </li>-->
                            </ul>
                        </div>
                    </div>

                    <div class="widget popular-post">
                        <div class="title-popular">
                            <h3>Categories</h3>
                        </div>
                        <div class="content-popular">
                            <div class="categories">
                                <a href="" class="btn btn-categories btn-jarak">Pendidikan</a>
                                <a href="" class="btn btn-categories btn-jarak">Organisasi</a>
                                <a href="" class="btn btn-categories btn-jarak">Lingkungan</a>
                                <a href="" class="btn btn-categories btn-jarak">Masyarakat</a>
                                <a href="" class="btn btn-categories btn-jarak">Sosial</a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<footer>
<br>
<div class="social-widget col-md-1 " style="float:right;" >
        <button type="button"  id="tombolScrollTop" class="btn btn-success" onclick="scrolltotop()"><i class="fa fa-chevron-up"></i>Up</button>
</div>
    <div class="gradient">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-4 col-xs-6 footer-col">
                    <ul>
                        <li class="head-list">Gallery</li>
                        <li><a href="">Kegiatan</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-xs-6 footer-col">
                    <ul>
                        <li class="head-list">Tentang</li>
                        <li><a href="">Visi Misi</a></li>
                        <li><a href="">Fasilitas</a></li>
                        <li><a href="">Jurusan</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-xs-12 footer-col">
                    <a class="navbar-hima" href="#"><img src="assets/image/logoman.png" width="50">MAN 3 SUKABUMi</a>
                    <p>Jl. Lapang Lodaya Setra No. 47, Citanglar, Surade</p>
                </div>
                <div class="col-md-12 developer">
                    <p>&copy; 2018. All Rights Reserved. Developed by </a></p>
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
<script src="assets/web/assets/jquery/jquery.min.js"></script>

<script>
    $(document).ready(function(){
	$(window).scroll(function(){
		if ($(window).scrollTop() > 100) {
			$('#tombolScrollTop').fadeIn();
		} else {
			$('#tombolScrollTop').fadeOut();
		}
	});
});

function scrolltotop()
{
	$('html, body').animate({scrollTop : 0},500);
}
</script>
<!-- script slick center -->
<script type="text/javascript">
    $('.responsive').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
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
</script>
</body>
</html>
