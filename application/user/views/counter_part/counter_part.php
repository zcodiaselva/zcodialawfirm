
<!-- Counter Part Start -->
<section class="counter-part section-p">
    <div class="container">
        <div class="counter-box">
            <div class="row">
                <?php
                if (isset($home_counter) && !empty($home_counter)) {
                    foreach ($home_counter as $key_counter => $value_counter) {
                        ?>
                        <!-- Single Counter -->
                        <div class="col-sm-6 col-lg-3 d-flex justify-content-center justify-content-lg-start">
                            <div class="counter-item">
                                <div class="count-des">
                                    <i class="<?php echo $value_counter['hc_image_class']; ?>"></i>
                                </div>
                                <div class="count-des">
                                    <h2 class="counter"><?php echo $value_counter['hc_count']; ?></h2>
                                    <p><?php echo $value_counter['hc_name']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
                <!-- Single Counter -->
                <!--div class="col-sm-6 col-lg-3 d-flex justify-content-center justify-content-lg-start mt-4 mt-sm-0">
                    <div class="counter-item">
                        <div class="count-des">
                            <i class="flaticon-manager-avatar"></i>
                        </div>
                        <div class="count-des">
                            <h2 class="counter">3972</h2>
                            <p>Trusted Clients</p>
                        </div>
                    </div>
                </div-->
                <!-- Single Counter -->
                <!--div class="col-sm-6 col-lg-3 d-flex justify-content-center justify-content-lg-start mt-4 mt-lg-0">
                    <div class="counter-item">
                        <div class="count-des">
                            <i class="flaticon-team-success"></i>
                        </div>
                        <div class="count-des">
                            <h2 class="counter">4578</h2>
                            <p>Successful Case</p>
                        </div>
                    </div>
                </div-->
                <!-- Single Counter -->
                <!--div class="col-sm-6 col-lg-3 d-flex justify-content-center justify-content-lg-start mt-4 mt-lg-0">
                    <div class="counter-item">
                        <div class="count-des">
                            <i class="flaticon-honor-band-mention"></i>
                        </div>
                        <div class="count-des">
                            <h2 class="counter">2978</h2>
                            <p>Honors & Award</p>
                        </div>
                    </div>
                </div-->

            </div>
        </div>
    </div>
</section>
<!-- Counter Part End -->