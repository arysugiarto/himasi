<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 03/07/18
 * Time: 06:18
 */
?><!DOCTYPE html>
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

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">home</a></li>
                <li><a href="tentang.php" >Fasilitas/Jurusan  </a></li>
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
                <h3>Event di MAN 3 SUKABUMi</h3>
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
            <li class="active">Acara MAN 3 Sukabumi</li>
        </ol>
    </div>
</div> <!-- end -->

<?php
require_once "admin/pages/lib/koneksi.php";
$link = connect();

$batas   =6;
$halaman =@$_GET['halaman'];
if (empty($halaman)){
$posisi =0;
$halaman=1;
}
else{
$posisi =($halaman-1)*$batas;
}
?>
<?php
$tampil_event = mysqli_query($link,"SELECT * FROM tb_event ORDER  BY id_event DESC LIMIT  $posisi,$batas ");
?>
<div id="events-page">
    <div class="container">
        <div class="row">
          <?php
              while ($data_event=mysqli_fetch_array($tampil_event)){
          ?>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="events-detail.html"><img src="admin/pages/forms/img/img_event/<?php echo $data_event['gambar_event']?>" alt="dalih" class="blog-image"></a>
                    <div class="caption">
                        <time class="date"><?= $data_event['tanggal_event'] ?></time> <br><br>
                        <a href="event-detail.php?id=<?= $data_event['id_event'] ?>" class="events-title"><?= $data_event['judul_event'] ?></a>
                        <div class="post-footer">
                            <?= $data_event['tempat_event']?>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="col-md-4">
                <div class="thumbnail">
                    <a href="#"><img src="assets/image/image-2.jpg" alt="dalih" class="blog-image"></a>
                    <div class="caption">
                        <time class="date">Sabtu, 10 Maret 2018</time> <br><br>
                        <a href="#" class="events-title">Cara Meningkatkan Motivasi dalam Berorganisasi</a>
                        <div class="post-footer">
                            Jl. sekeloa utara Coblong
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#"><img src="assets/image/image-2.jpg" alt="dalih" class="blog-image"></a>
                    <div class="caption">
                        <time class="date">Sabtu, 10 Maret 2018</time> <br><br>
                        <a href="#" class="events-title">Cara Meningkatkan Motivasi dalam Berorganisasi</a>
                        <div class="post-footer">
                            Jl. sekeloa utara Coblong
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#"><img src="assets/image/image-2.jpg" alt="dalih" class="blog-image"></a>
                    <div class="caption">
                        <time class="date">Sabtu, 10 Maret 2018</time> <br><br>
                        <a href="#" class="events-title">Cara Meningkatkan Motivasi dalam Berorganisasi</a>
                        <div class="post-footer">
                            Jl. sekeloa utara Coblong
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#"><img src="assets/image/image-2.jpg" alt="dalih" class="blog-image"></a>
                    <div class="caption">
                        <time class="date">Sabtu, 10 Maret 2018</time> <br><br>
                        <a href="#" class="events-title">Cara Meningkatkan Motivasi dalam Berorganisasi</a>
                        <div class="post-footer">
                            Jl. sekeloa utara Coblong
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#"><img src="assets/image/image-2.jpg" alt="dalih" class="blog-image"></a>
                    <div class="caption">
                        <time class="date">Sabtu, 10 Maret 2018</time> <br><br>
                        <a href="#" class="events-title">Cara Meningkatkan Motivasi dalam Berorganisasi</a>
                        <div class="post-footer">
                            Jl. sekeloa utara Coblong
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#"><img src="assets/image/image-2.jpg" alt="dalih" class="blog-image"></a>
                    <div class="caption">
                        <time class="date">Sabtu, 10 Maret 2018</time> <br><br>
                        <a href="#" class="events-title">Cara Meningkatkan Motivasi dalam Berorganisasi</a>
                        <div class="post-footer">
                            Jl. sekeloa utara Coblong
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#"><img src="assets/image/image-2.jpg" alt="dalih" class="blog-image"></a>
                    <div class="caption">
                        <time class="date">Sabtu, 10 Maret 2018</time> <br><br>
                        <a href="#" class="events-title">Cara Meningkatkan Motivasi dalam Berorganisasi</a>
                        <div class="post-footer">
                            Jl. sekeloa utara Coblong
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#"><img src="assets/image/image-2.jpg" alt="dalih" class="blog-image"></a>
                    <div class="caption">
                        <time class="date">Sabtu, 10 Maret 2018</time> <br><br>
                        <a href="#" class="events-title">Cara Meningkatkan Motivasi dalam Berorganisasi</a>
                        <div class="post-footer">
                            Jl. sekeloa utara Coblong
                        </div>
                    </div>
                </div>-->
                <?php } ?>
            </div>

            <nav aria-label="Page navigation">
              <?php
              $tampil_event2     =mysqli_query($link, "SELECT * FROM tb_event");?>
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <?php
                    $jmldata    =mysqli_num_rows($tampil_event2);
                    $jmlhalaman =ceil($jmldata/$batas);
                    for ($i=1;$i<=$jmlhalaman;$i++)
                    if ($i != $halaman){
                    ?>
                    <li><?php echo "<a href=\"event-page.php?halaman=$i\">$i</a>";?></li>
                    <?php } else{ ?>
                    <li><?php echo  "<a href=\"\">$i</a>"; }?></li>
                    <!--<li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>-->
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
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
