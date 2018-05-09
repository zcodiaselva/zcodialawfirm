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
                    <h1>PRACTISE AREA</h1>
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

<!-- Practice area Part start -->
<section class="practise-4-part section-p pad-bot-30 practArea latest-posts">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-head-3-1">
                    <h2>Practice <span>Areas</span></h2>
                </div>
                <div class="auto-container">
                    <div class="filters">
                        <ul class="filter-tabs filter-btns clearfix">
                            <li class="<?php
                            if ($this->uri->segment(4) == "") {
                                echo "active";
                            } else {
                                echo "";
                            }
                            ?> filter" ><?php echo anchor("practiceareas/getCategoryDetails", 'VIEW ALL'); ?></li>
                                <?php
                                if (isset($practiceareas_items) && !empty($practiceareas_items)) {
                                    foreach ($practiceareas_items as $key => $value) {
                                        ?>
                                    <li class="filter <?php
                                    if ($this->uri->segment(4) == $key && $this->uri->segment(4) <> '') {
                                        echo "active";
                                    } else {
                                        echo "";
                                    }
                                    ?>" pid="<?php echo $value['pat_id']; ?>"><?php echo anchor("practiceareas/getCategoryDetails/" . $value['pat_id'] . "/" . $key, $value['pat_header']); ?></li>
                                        <?php
                                    }
                                }
                                ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <?php
            if (isset($practicearea_category) && !empty($practicearea_category)) {
                foreach ($practicearea_category as $key => $value) {
                    $pad_image = json_decode($value['pad_image'], true);
                    ?> 

                    <!--  --Post 1  -->
                    <article class="post--preview col-sm-6 col-lg-4 ">
                        <div class="img">

                            <img class="embed-responsive-item" src="<?php echo $pad_image[0]; ?>" alt="">

                            <div class="btn_rm">
                                <?php echo anchor("practiceareas/getContent/?id=" . $this->encrypt->encode($value['pad_id'], 'Jfmamjjas0nd'), 'Read More', array('class' => 'pract btn-1 hide')); ?>
                            </div>

                            <div class="description">
                                <h3>
                                    <?php echo anchor("practiceareas/getContent/?id=" . $this->encrypt->encode($value['pad_id'], 'Jfmamjjas0nd'), $value['pad_head']); ?>
                                </h3>
                                <h4 class="hide">
                                    <a class="adress">Autor name</a> ―
                                    <a class="time">12 yan 2018</a>
                                </h4>
                                <p class="mini"><?php echo character_limiter($value['pad_content'], 150); ?></p>
                            </div>
                        </div>
                    </article>
                    <!--  --/Post 1  -->
                    <?php
                }
            }
            ?>

        </div>
    </div>
</section>
<!-- Practice area Part End -->