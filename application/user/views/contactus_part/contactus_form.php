<!-- Contact bottom area Start -->
<section class="contuct-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="con-bottom-inner">
                    <h4>CONTACT <span>US</span></h4>
                    <div class="per-social">
                        <ul>
                            <?php
                            if (isset($contactus_social) && !empty($contactus_social)) {
                                foreach ($contactus_social as $key_social => $value_social) {
                                    ?>
                                    <li><a target=”_blank” href="<?php echo $value_social['c_social_link']; ?>"><i class="<?php echo $value_social['c_social_name']; ?>"></i></a></li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>

                    <?php if (isset($contactus_contact) && !empty($contactus_contact)) { ?>
                        <p><?php echo $contactus_contact[0]['c_content']; ?></p>
                    <?php } ?>

                    <div class="con-page-form">
                        <input type="text" placeholder="Name *" id="txtContactName" class="mar-r">
                        <input type="text" placeholder="Email *" id="txtContactEmail">
                        <textarea name="message" placeholder="Message" id="txtContactMessage"></textarea>
                        <input value="Submit" class="btnUpdateContactDetails" type="submit" onclick="contact_submit($(this))">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Contact bottom area end -->