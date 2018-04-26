<?php
$attySkillName = $attySkillDesc = $attySkillBGImage = '';
if (isset($attorney_skills) && !empty($attorney_skills)) {
    $attySkillName = $attorney_skills[0]['atty_skill_name'];
    $attySkillDesc = $attorney_skills[0]['atty_skill_desc'];
    $attySkillBGImage = $attorney_skills[0]['atty_skill_bg_image'];
}
?>
<!-- Skill Part Start -->
<section class="skill-part section-p" style1="background: url(<?php echo $attySkillBGImage; ?>) no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="skill-box">
                    <div class="section-head-2">
                        <h2><?php echo strtoupper($attySkillName); ?></h2>
                        <p><?php echo $attySkillDesc; ?></p>
                    </div>
                    <div class="progressbar-box">
                        <?php
                        $start_color = $end_color = '';
                        if (isset($attorney_skill_types) && !empty($attorney_skill_types)) {
                            foreach ($attorney_skill_types as $key => $value) {
                                $start_color = $this->convertcolorcode->convert2rgb(substr($value['atty_st_start_color'],1));
                                $end_color = $this->convertcolorcode->convert2rgb(substr($value['atty_st_end_color'],1));
                                ?>
                                <!-- Single Skill -->
                                <div class="progressbar-wrapper">
                                    <div class="progress vertical bottom">
                                        <div class="progress-bar six-sec-ease-in-out"  style="background: linear-gradient(<?php echo $start_color; ?>,<?php echo $end_color; ?>);" data-bg-image="<?php echo "'background: linear-gradient('. $start_color; .', '. $end_color');";  ?>" role="progressbar" data-transitiongoal="<?php echo $value['atty_st_goal']; ?>"></div>
                                    </div>
                                    <h5 class="font-size-16"><?php echo $value['atty_st_name']; ?></h5>
                                    <span><?php echo $value['atty_st_goal']; ?>%</span>
                                </div>
                                <?php
                            }
                        }
                        ?>



                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-5 offset-xl-1">
                <div class="skill-contact-form">
                    <div class="section-head-2">
                        <h2>EXPERIENCE <span>IN CASES</span></h2>
                        <p>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard unknown printa galley.</p>
                    </div>
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-12">
                                <label>Free Case Consultation</label>
                            </div>
                            <div class="col-12 col-lg-12">
                                <input class="form-control" type="text" placeholder="Name*" required>
                            </div>
                            <div class="col-12 col-lg-12">
                                <input class="form-control" type="email" placeholder="Email*" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn-1">SEND US</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Skill Part End -->