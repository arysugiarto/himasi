<?php
/**
 * Created by PhpStorm.
 * User: Ary Sugiarto
 * Date: 03/06/18
 * Time: 08:01
 */
?>
<footer>
    <div class="gradient">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-4 col-xs-6 footer-col">
                    <ul>
                        <li class="head-list">Gallery</li>
                        <li><a href="">Alumni</a></li>
                        <li><a href="">Kegiatan</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-xs-6 footer-col">
                    <ul>
                        <li class="head-list">Tentang</li>
                        <li><a href="">Visi Misi</a></li>
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
