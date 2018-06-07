<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 03/06/18
 * Time: 08:01
 */

require_once "admin/pages/lib/koneksi.php";
$link = connect();

?>


<?php
$tampil = mysqli_query($link,"SELECT * FROM tb_tampilan");
?>

<div class="hima-header wow fadeIn">
    <div class="image-gradient">
        <div class="container">

            <div class="himaheader-inner">
                <h1 class="wow bounceIn" data-wow-delay=".2s">MADRASAH ALIYAH NEGERI 3 KABUPATEN SUKABUMI</h2>
                <h2 class="wow bounceIn" data-wow-delay=".3s">"Madrasah lebih baik lebih baik Madrasah"</h2>
                <a href="#tentang" type="button" class="btn btn-default wow bounceIn" data-wow-delay=".4s">Selanjutnya</a>
                <div class="arrow animated infinite fadeInDown">
                    <img src="assets/image/download.png" width="30">
                </div>
            </div>

        </div>
    </div>
</div>
<!-- end header -->
<br>
</div>
        <div class="media-container-row" >
        <center>
        <h2 id="tentang"><font color="black">TENTANG</font></h2>
            <div class="title col-0 col-md-0">
                <br><br>
                <div class="visi"><br>
                <h3>Visi</h3>
                <h4>“Terwujudnya Warga Madrasah yang unggul dalam Imtaq, berwasasan Iptek, Berdaya Saing dan Menjadi Pilihan Umat”</h4>
                <br>
                <h3>Misi</h3>
                <h4>
                 Meningkatkan Kualitas Pendidikan Pengetahuan Agama Islam dan Wawasan Keislaman<br><br>
                 Meningkatkan Kualitas Pendidikan Pengetahuan Umum<br><br>
                 Meningkatkan Kualitas Kinerja Tenaga Pendidik dan Tenaga Kependidikan<br><br>
                 Meningkatkan Kualitas Sarana dan Prasarana Pendidikan<br><br>
                 Meningkatkan Kualitas Pelayanan Administrasi secara Profesional<br><br>
                 Meningkatkan Kualitas hubungan dengan masyarakat<br><br>
                </h4><br>
                </div>
              </center>
            </div>
        </div>
        <br>
<?php
$tampil_event = mysqli_query($link,"SELECT * FROM tb_event ORDER BY id_event DESC LIMIT 3");
?>
<!-- ini bagian events dan blog -->
<div class="container">
    <div class="row post-section">
        <div class="col-md-4 col-xs-12 wow fadeIn" data-wow-delay=".1s">
            <!-- section events -->
            <aside class="sidebar-left" id="widget-event">
                <div class="widget-header">
                    <img src="assets/image/kal.png" width="50">
                    <h4 class="widget-header-title">Events</h4>
                </div>
                <?php
                while ($data_event = mysqli_fetch_array ($tampil_event)){ ?>
                    <div class="widget-content">
                        <ul class="events-list">
                            <li><a href="event-detail.php?id=<?php echo $data_event["id_event"] ?>"><?php echo $data_event['judul_event']?></a> <br>
                                <span class="event-date"><?php  echo $data_event['tanggal_event']?></span> <br>
                                <span class="event-place"><?php echo $data_event['tempat_event']?></span>
                            </li>
                        </ul>
                    </div>
                <?php  }?>
                <div class="event-more">
                    <a href="event-page.php">Lihat Semua >></a>
                </div>
            </aside> <!-- end events -->

            <!-- ini bagian section pengunjung -->
            <aside class="sidebar-left" id="widget-event">
                <div class="widget-header">
                    <img src="assets/image/bar-chart.png" width="50">
                    <h4 class="widget-header-title">Pengunjung</h4>
                </div>
                <?php
                $file = 'counter.txt';
                if(file_exists($file)){
                    $file_open = fopen($file, "r");
                    $cek = trim(fgets($file_open, 255));
                    $cek++;
                }  else {
                    $cek = 1;
                }
                $file_open = fopen($file, "w");
                fwrite($file_open, $cek);
                fclose($file_open); ?>

                <div class="widget-content">
                    <ul class="visited">
                        <li><?php echo $cek;?> views </li>
                    </ul>
                </div>
            </aside> <!-- end pengunjung -->
        </div>
        <?php
        $tampil_artikel = mysqli_query($link,"SELECT * FROM tb_artikel ORDER  BY id_artikel ASC LIMIT 2 ");
        ?>
        <!-- ini bagian future blog post -->
        <div class="col-md-8 col-xs-12 blog-post">
            <div class="col-md-12">
                <?php while ($data_artikel = mysqli_fetch_array($tampil_artikel)){?>
                <div class="col-md-6 blog-post-inner wow fadeIn" data-wow-delay=".5s">
                    <div class="thumbnail">
                           <a href="#" ><img width="" height="" src="admin/pages/forms/img/img_artikel/<?php  echo $data_artikel['gambar_artikel']?>" alt="Tidak ada gambar" class="blog-image"></a>
                        <div class="caption">
                            <a href=""><span class="label" style="background-color: #13CE66; border-radius: 0; border-bottom-right-radius: .50em; padding: 3px 8px;"><?= $data_artikel['kategori']?></span></a>
                            <a href="article-page.php?Id=<?php echo $data_artikel["id_artikel"] ?>" class="blog-title"><?php  echo $data_artikel['judul_artikel']?></a>
                            <div class="tgl-posting">
                                <div class="date">
                                    <span><?php  echo $data_artikel['tanggal'] ?></span>
                                </div>
                                <div class="view">
					        	<span><i class="fa fa-eye"></i>187</span>
                                </div>
                            </div>

                            <div class="post-footer">
                                <!--<div class="photo-admin">
                                    <img src="assets/image/" class="img-admin" width="15" height="15">
                                </div>-->
                                <div class="nama-admin">
                                    <a href="#" class="name"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                <?php
                $tampil_artikel = mysqli_query($link,"SELECT * FROM tb_artikel ORDER  BY id_artikel DESC LIMIT 3 ");
                ?>
               <div class="col-md-12">
                   <?php while ($data_artikel = mysqli_fetch_array($tampil_artikel)){?>
                   <div class="col-md-4 blog-post-inner wow fadeIn" data-wow-delay=".3s">
                       <div class="thumbnail">
                           <a href="#" ><img width="" height="" src="admin/pages/forms/img/img_artikel/<?php  echo $data_artikel['gambar_artikel']?>" alt="Tidak ada gambar" class="blog-image"></a>
                           <div class="caption">
                               <a href=""><span class="label" style="background-color: #13CE66; border-radius: 0; border-bottom-right-radius: .50em; padding: 3px 8px;"><?php echo $data_artikel['kategori']?></span></a> <br><br>
                               <a href="article-page.php?Id=<?php echo $data_artikel["id_artikel"] ?>" class="blog-title"><?php  echo $data_artikel['judul_artikel']?></a>
                               <div class="tgl-posting">
                                   <div class="date">
                                       <span><?php  echo $data_artikel['tanggal'] ?></span>
                                   </div>
                                   <div class="view">
                                           <span><i class="fa fa-eye"></i>
                                           187</span>
                                   </div>
                               </div>

                               <div class="post-footer">
                                  <!-- <div class="photo-admin">
                                       <img src="assets/image/" class="img-admin" width="15" height="15">
                                   </div>-->
                                   <div class="nama-admin">
                                       <a href="#" class="name"></a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <?php } ?>
               </div>
            </div> <!-- end bagian future blog post -->
        </div>
    </div>

    <?php
require_once "admin/pages/lib/koneksi.php";
$link = connect();
?>
<?php
$tampil_galeri = mysqli_query($link,"SELECT * FROM tb_galeri ORDER  BY id_galeri DESC ");
?>

<div id="gallery-section">
<div class="container">
<center>
<h2 class="warna">Gallery</h2>
</center>
    <div class="">
        <div class="container">
       
            <div class="row gallery-content gallery">
            <?php
            while ($data_galeri=mysqli_fetch_array($tampil_galeri)){
            ?>
                <figure class="col-md-2 effect-ming">
                    <a href="admin/pages/forms/img/img_galeri/<?php echo $data_galeri['gambar_galeri'] ?>" class="thumbnail" data-caption="<?= $data_galeri['caption']?>" >
                        <img src="admin/pages/forms/img/img_galeri/<?php echo $data_galeri['gambar_galeri'] ?>" alt="">
                    </a>
                </figure>
                <?php } ?>
            </div>
            
        </div>
    </div>
</div>
</div>

    <!-- ini bagian kesan pesan kang kade ulah poho -->
                <div class="row contact wow fadeIn">
                    <div class="col-md-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4162.276649979676!2d106.5589946636075!3d-7.338776599240823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6802f5286f60b9%3A0x13007a76135d689e!2sMan+3+Sukabumi!5e0!3m2!1sid!2sid!4v1527155354093" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4 contact-info">
                        <h3>Informasi Kontak</h3>
                        <h4>
                        <button type="button" class="btn btn-info btn-fb" width:15px;><i class="fa fa-facebook pr-1"></i></button>
                        <span class="name-social youtube-hover"> Keluarga Besar MAN 3 Sukabumi</span><br><br>
                        <button type="button" class="btn btn-danger btn-fb"  width:15px;><i class="fa fa-envelope pr-1"></i> </button> 
                        <span class="name-social youtube-hover"> man3sukabumi@gmail.com</span><br><br>
                        <button type="button" class="btn btn-purple btn-fb"  width:15px;><i class="fa fa-instagram pr-1"></i> </button> 
                        <span class="name-social youtube-hover"> @man3sukabumi</span><br><br>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-4 wow fadeIn">
                        <div class="social-widget">
                        <iframe width="100%" height="200" src="https://www.youtube.com/embed/Gn5AUSaJ78E" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp">
                        <div class="social-widget">
                        <iframe width="100%" height="200" src="https://www.youtube.com/embed/UtqJ45WflJs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeIn">
                        <div class="social-widget">
                        <iframe width="100%" height="200" src="https://www.youtube.com/embed/xTNatFicFA4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end kesan pesan -->
</body>
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
