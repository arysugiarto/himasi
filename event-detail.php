<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 03/07/18
 * Time: 06:17
 */
 require_once 'admin/pages/lib/koneksi.php';
 $link = connect();
 if(isset($_GET['id'])){
    $id = $_GET['id'];
    
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="assets/image/logoman.png">

<title>MAN 3 Sukabumi</title>
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
                <li><a href="tentang.php" >Fasilitas/Jurusan </a></li>
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
                <h3>Event</h3>
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
            <li><a href="#">Acara MAN 3 Sukabumi</a></li>
            <li class="active">Detail Acara </li>
        </ol>
    </div>
</div> <!-- end -->
<?php
$tampil_event = mysqli_query($link,"SELECT * FROM tb_event WHERE id_event='$id'");
?>

<div id="events-detail">
    <div class="container events-detail-inner">
      <?php
      while ($data_event = mysqli_fetch_array ($tampil_event)){ ?>
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <div class="event-poster thumbnail">
                    <img src="admin/pages/forms/img/img_event/<?= $data_event['gambar_event']?>" class="blog-image">
                </div>
            </div>

            <div class="col-xs-12 col-md-4 garis">
                <div class="detail-info">
                    <h5><span class="tgl-besar"><?= $data_event['tanggal_event']?> </span></h5>
                    <h2><?= $data_event['judul_event']?></h2>
                    <h5>by <?= $data_event['penyelenggara'] ?></h5>
                    <div class="price"><?= $data_event['sifat'] ?></div>
                    <div class="daftar-event">
                        <button type="button" class="btn btn-success" style="width: 100%;" id="myBtn">Daftar</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-8">
                <div class="deskripsi">
                    <h3 class="label-primary-1">DESCKRIPSI</h3>
                    <P><STRONG>Jadwal:</STRONG><BR><?= $data_event['tanggal_event']?>, <!--18:00 - 21:00 WIB--><BR><?= $data_event['tempat_event']?></P>
                    <P><STRONG>Tiket:</STRONG><BR>Rp <?= $data_event['harga_tiket']?></P>
                    <P><STRONG></STRONG></P>
                    <P<?= $data_event['artikel_event']?>></P>
                    <P><STRONG>Hubungi kami:</STRONG><BR><SPAN>info@datasciencebandung.com</SPAN></P>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="deskripsi keterangan">
                    <h3 class="label-primary-1">Date and Time</h3>
                    <p><?= $data_event['tanggal_event']?></p>
                    <p><?= $data_event['waktu'] ?> sd <?= $data_event['waktu_selesai'] ?> </p>
                    <br><br>
                    <h3 class="label-primary-1">Location</h3>
                    <p><?= $data_event['tempat_event']?></p>
                    <br><br>
                    <h3 class="label-primary-1">More Info</h3>
                    <a href="#"><i class="fa fa-facebook"></i> Keluarga Besa MAN 3 Sukabumi</a> <br>
                    <a href="#"><i class="fa fa-instagram"></i> man3sukabumi</a>
                </div>
            </div>
        </div>
      <?php } ?>
    </div>
</div>

<footer>
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
                <div class="social-widget col-md-0 " style="float:right;" >
                    <button type="button"  id="tombolScrollTop" class="btn btn-success" onclick="scrolltotop()"><i class="fa fa-chevron-up"></i></button>
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
