<?php
$bc_header = $bc_image = '';
if (isset($breadcrumb) && !empty($breadcrumb)) {
    $bc_header = $breadcrumb[0]['atty_bc_header'];
    $bc_image = $breadcrumb[0]['atty_bc_bg_image'];
}
?>
<!-- BreadCrumb Part Start -->
<section class="breadcrumb-part1" style="background: url(<?php echo $bc_image; ?>) no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-title">
                    <h1>PRACTISE AREA detail</h1>
                </div>
            </div>
        </div>
        <div class="breadcrumb-link">
            <ul class="flat-list hide">
                <li><a href="index-2.html">Home</a></li>
                <li><a href="#">PRACTISE AREA</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- BreadCrumb Part End -->

<!-- Prictise area Part start -->
<section class="section-p">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-head-3-1">
                    <h2>Practice Areas</h2>
                    <p>Dummy text of the printing and typesetting industry Ipsum has been the industry's standard unknown</p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-12 col-xl-12 ">
                <div class="prac-detils-area ">
                    <div class="prac-det-carousel">
                        <div class="practice-slider swiper-container" data-swiper-config='{"loop": true, "effect": "slide", "speed": 800, "autoplay": 5000, "paginationClickable": true }'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="themes/frontend/images/practice/b1.jpg" alt=""></div>
                                <div class="swiper-slide"><img src="themes/frontend/images/practice/b1.jpg" alt=""></div>
                                <div class="swiper-slide"><img src="themes/frontend/images/practice/b1.jpg" alt=""></div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="prac-det-inner">
                        <h2>Children Guidance to Their Mother Law Firm’s Advantages</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                        <p>Are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum</p>
                        <blockquote><i class="fa fa-quote-left" aria-hidden="true"></i>  
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.  <i class="fa fa-quote-right" aria-hidden="true"></i>
                        </blockquote>

                        <p>You use this site regularly and would like to help keep the site on the Internet, please consider donating a small sum to help pay for the hosting and bandwidth bill or randomised words which don't look even slightly believable passage.</p>
                        <h3>The standard Lorem Ipsum passage</h3>
                        <p>You use this site regularly and would like to help keep the site on the Internet, please consider donating a small sum to help pay for the hosting.</p>

                        <ul>
                            <li>Admiralty (Maritime) Law</li>
                            <li>Businessconsectetur adipi (Corporate) Law</li>
                            <li>Finibus Bonorum et Malorum written</li>
                            <li>This site regularly and would like to help keep the</li>
                        </ul>
                        <p>You use this site regularly and would like to help keep the site on the Internet, please consider donating a small sum to help pay for the hosting and bandwidth bill or randomised words which don't look even slightly believable passage.</p>
                        <div class="prac-inner-social">
                            <span>Share Post :</span>
                            <div class="per-social">
                                <ul>
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo 'http://localhost:8080' . $_SERVER['REQUEST_URI']; ?>"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/intent/tweet?url=<?php echo 'http://localhost:8080' . $_SERVER['REQUEST_URI']; ?>"><i class="fa fa-twitter"></i></a></li>
                                    <!--li><a class="hide" href="https://www.facebook.com/sharer/sharer.php?u=<?php //echo 'http://localhost:8080' . $_SERVER['REQUEST_URI']; ?>"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a class="hide" href="https://www.facebook.com/sharer/sharer.php?u=<?php //echo 'http://localhost:8080' . $_SERVER['REQUEST_URI']; ?>"><i class="fa fa-instagram"></i></a></li-->
                                    <li><a href="https://plus.google.com/share?url=<?php echo 'http://localhost:8080' . $_SERVER['REQUEST_URI']; ?>"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="about-author">
                            <div class="avator">
                                <img src="themes/frontend/images/practice/s1.jpg" alt="">
                            </div>
                            <div class="author-info">
                                <h5>About Amelie Aatson</h5>
                                <p>You use this site regularly and would like to help keep the site on the Internet, please consider donating a small sum to help pay for the hosting and bandwidth bill or randomised.</p>
                            </div>
                        </div>
                        <div class="consalt-form1 con-bottom-inner">
                            <?php include APPPATH . 'views/contactus_part/contactus_form.php'; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Prictise area Part End -->

