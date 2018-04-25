<!-- Testiminial Part Start -->
<section class="testimonial-part section-p">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6 col-lg-6 mb-5 mb-lg-0">
                <div class="section-head-2 mb-3">
                    <?php
                    $word1 = $word2 = $word3 = '';
                    $aut_main_title = $about_timeline['aut_main_title'];
                    $title_message = explode(' ', $aut_main_title, 3);
                    ?>
                    <h2><?php echo ((isset($title_message[0]) && !empty($title_message[0])) ? $title_message[0] : '') . ' ' . ((isset($title_message[1]) && !empty($title_message[1])) ? $title_message[1] : ''); ?> <span><?php echo ((isset($title_message[2]) && !empty($title_message[2])) ? $title_message[2] : ''); ?></span></h2>
                    <p><?php echo $about_timeline['aut_sub_title']; ?></p>
                </div>
                <div class="story-box">
                    <div class="row no-gutters justify-content-center">

                        <?php
                        $counter = 0;
                        for ($index = 0; $index <= sizeof($abt_timelineitems); $index += 2) {


                            //foreach ($abt_timelineitems as $tl_key => $tl_value) {
                            ?>
                            <?php if (isset($abt_timelineitems[$counter]['autli_content']) && !empty($abt_timelineitems[$counter]['autli_content'])) { ?>
                                <!-- Single Success Story -->
                                <div class="story-item d-sm-flex align-items-sm-center">
                                    <div class="comment-box">
                                        <div class="story-comment text-right">
                                            <p><?php echo $abt_timelineitems[$counter]['autli_content']; ?></p>
                                            <img src="<?php echo $abt_timelineitems[$counter]['autli_image']; ?>" alt="" class="">
                                        </div>
                                    </div>
                                    <div class="year year-right-box text-center text-sm-left">
                                        <div class="years year-right"><?php echo $abt_timelineitems[$counter]['autli_fromyear'] . ' - ' . $abt_timelineitems[$counter]['autli_toyear']; ?></div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php $counter += 1; ?>
                            <?php if (isset($abt_timelineitems[$counter]['autli_content']) && !empty($abt_timelineitems[$counter]['autli_content'])) { ?>
                                <!-- Single Success Story -->
                                <div class="story-item d-sm-flex align-items-sm-center">
                                    <div class="year text-center text-sm-right">
                                        <div class="years year-left"><?php echo $abt_timelineitems[$counter]['autli_fromyear'] . ' - ' . $abt_timelineitems[$counter]['autli_toyear']; ?></div>
                                    </div>
                                    <div class="comment-box">
                                        <div class="story-comment story-comment-right text-left mt-0">
                                            <p><?php echo $abt_timelineitems[$counter]['autli_content']; ?></p>
                                            <img src="<?php echo $abt_timelineitems[$counter]['autli_image']; ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php
                            $counter += 1;
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-5 col-lg-6 offset-xl-1">
                <div class="testimonial-box">
                    <div class="section-head-2">
                        <h2>Our Testimonial <span>Pro</span></h2>
                        <p>Dummy text of the printing and typesetting industry or has been the industry's standard unknown printa galley.</p>
                    </div>
                    <div class="swiper-container testimonial-slider" data-swiper-config='{"loop": true, "effect": "slide", "speed": 800, "autoplay": 5000, "paginationClickable": true, "spaceBetween": 25 }' >
                        <div class="swiper-wrapper">
                            <?php
                            $this->load->helper('text');
                            if (isset($testimonial_slider_details) && !empty($testimonial_slider_details)) {
                                foreach ($testimonial_slider_details as $key_tms => $value_tms) {
                                    ?>
                                    <!-- Single Testimonial -->
                                    <div class="swiper-slide testimonial-item">
                                        <div class="row">
                                            <div class="col-8 offset-2 col-sm-5 col-xl-4 offset-sm-0 mb-3 mb-sm-0">
                                                <div class="person-detail">
                                                    <div class="person-img">
                                                        <img src="<?php echo $value_tms['tms_image']; ?>" alt="Image">
                                                    </div>
                                                    <h3><?php echo $value_tms['tms_name']; ?></h3>
                                                    <p style="display:none;">UI Designer</p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-7 col-xl-8">
                                                <div class="person-comment">
                                                    <h4><?php echo word_limiter($value_tms['tms_content'], 4); ?></h4>
                                                    <ul class="flat-list star">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                    <div class="mains-comment">
                                                        <p><i class="fa fa-quote-left"></i><?php echo $value_tms['tms_content'];?><i class="fa fa-quote-right"></i> </p>
                                                    </div>
                                                    <img src="<?php echo $value_tms['tms_image_sign']; ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testiminial Part End -->