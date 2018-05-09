<?php
$bc_header = $bc_image = '';
if (isset($breadcrumb) && !empty($breadcrumb)) {
    $bc_header = $breadcrumb[0]['atty_bc_header'];
    $bc_image = $breadcrumb[0]['atty_bc_bg_image'];
}
$abt_pa_head = $abt_pa_content = '';
if (isset($about_pa) && !empty($about_pa)) {
    $abt_pa_head = $about_pa[0]['pa_mainheader'];
    $abt_pa_content = $about_pa[0]['pa_content'];
}
$pad_head = $pad_content = '';
if (isset($pa_content) && !empty($pa_content)) {

    $pad_head = $pa_content[0]['pad_head'];
    $pad_content = $pa_content[0]['pad_content'];
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
                    <h2><?php echo $abt_pa_head; ?></h2>
                    <p><?php echo $abt_pa_content; ?></p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-12 col-xl-12 ">
                <div class="prac-detils-area ">
                    <div class="prac-det-carousel">
                        <div class="practice-slider swiper-container" data-swiper-config='{"loop": true, "effect": "slide", "speed": 800, "autoplay": 5000, "paginationClickable": true }'>
                            <div class="swiper-wrapper">
                                <?php
                                if (isset($pa_content) && !empty($pa_content)) {
                                    foreach ($pa_content as $key => $value) {
                                        $images_array = json_decode($value['pad_image'], true);
                                        foreach ($images_array as $image) {
                                            ?>
                                            <div class="swiper-slide"><img src="<?php echo $image; ?>" alt=""></div>
                                            <?php
                                        }
                                    }
                                }
                                ?>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="prac-det-inner">
                        <h2><?php echo $pad_head; ?></h2>
                        <p>
                            <?php echo $pad_content; ?>
                        </p>

                        
                        <div class="prac-inner-social">
                            <span>Share Post :</span>
                            <div class="per-social">
                                <ul>
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo 'http://localhost:8080' . $_SERVER['REQUEST_URI']; ?>"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/intent/tweet?url=<?php echo 'http://localhost:8080' . $_SERVER['REQUEST_URI']; ?>"><i class="fa fa-twitter"></i></a></li>
                                    <!--li><a class="hide" href="https://www.facebook.com/sharer/sharer.php?u=<?php //echo 'http://localhost:8080' . $_SERVER['REQUEST_URI'];        ?>"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a class="hide" href="https://www.facebook.com/sharer/sharer.php?u=<?php //echo 'http://localhost:8080' . $_SERVER['REQUEST_URI'];        ?>"><i class="fa fa-instagram"></i></a></li-->
                                    <li><a href="https://plus.google.com/share?url=<?php echo 'http://localhost:8080' . $_SERVER['REQUEST_URI']; ?>"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
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

