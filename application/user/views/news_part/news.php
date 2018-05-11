<!-- BreadCrumb Part Start -->
<!--<script type="text/javascript" src="themes/frontend/news_part/js/df983.js"></script>-->
<link rel="stylesheet" type="text/css" href="themes/frontend/news_part/css/responsive.css">

<?php
$thread = '';
$enc_key = 'LGlVr5GiXE9bGf3UqDH';
?>
<div class="bc-style2">
    <div class="bc-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><span>LEGAL</span> NEWS</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="bc-list hide">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-link">
                        <ul class="flat-list hide">
                            <li><a href="#">Home</a></li>
                            <li>ATTORNEYS</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BreadCrumb Part End -->
<style id='main-inline-css' type='text/css'>
    .category-link-bg-5 {
        background-color: #6ea045;
        padding: 5px 8px 5px 8px;
        color: #fff;
    }
</style>

<div id="page" class="site main1">
    <div class="body-overlay"></div>
    <div class="menu-overlay"></div>

    <div id="pageContent">
        <article id="post-66" class="post-661 page1 type-page1 status-publish1 hentry1">

            <div class="entry-content">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-md-12 ">

                            <div class="singlecenter" data-autoplay="true">
                                <?php
                                $thread = '';
                                if (isset($news_slider) && !empty($news_slider)) {
                                    $l1 = 0;
                                    $index = 0;
                                    foreach ($news_slider as $key_nf => $value_nf) {
                                        $nf_id = $value_nf['nf_id'];
                                        $thread = json_decode($value_nf['thread'], true);
                                        $text = stripslashes($value_nf['text']);
                                        if (isset($thread) && !empty($thread)) {
                                            $published_date = substr($thread['published'], 0, -6);
                                            $timezone = substr($thread['published'], -6);
                                            $date = new DateTime($published_date, new DateTimeZone('UTC'));
                                            $date->setTimezone(new DateTimeZone($timezone));
                                            $updated_published_date = $date->format('M j, Y');

                                            if (isset($thread['main_image']) && !empty($thread['main_image'])) {
                                                ?>
                                                <div class="item <?php echo (isset($thread['main_image']) && !empty($thread['main_image']) ? 'has-bg-image' : 'no-image hide'); ?>" img_name="<?php echo $thread['main_image']; ?>">
                                                    <div class="col-xs-12 col-md-12 no-padding">
                                                        <article class="post slider-style1 post-383 type-post status-publish format-quote has-post-thumbnail hentry category-travel tag-considerably tag-especially tag-europe tag-international post_format-post-format-quote ">
                                                            <figure class="post-item <?php echo (isset($thread['main_image']) && !empty($thread['main_image']) ? 'has-bg-image' : 'no-image'); ?>">
                                                                <?php echo anchor("news/single_page/?id=" . $this->encrypt->encode($nf_id, $enc_key), '<div class="overlay"></div><img src="' . $thread["main_image"] . '" class="img" width="1241" height="623" alt="" />'); ?>

                                                            </figure>
                                                            <header class="post-head <?php echo (isset($thread['main_image']) && !empty($thread['main_image']) ? 'has-bg-image' : 'no-image hide'); ?>">
                                                                <h1 class="post-title">
                                                                    <?php echo anchor("news/single_page/?id=" . $this->encrypt->encode($nf_id, $enc_key), stripcslashes($thread['title']), array('rel' => 'bookmark')); ?>
                                                                </h1>
                                                                <aside class="post-meta <?php echo (isset($thread['main_image']) && !empty($thread['main_image']) ? 'has-bg-image' : 'no-image'); ?>">
                                                                    <?php echo anchor("news/single_page/?id=" . $this->encrypt->encode($nf_id, $enc_key), 'TRAVEL', array('class' => 'post-category category-link-bg-5', 'title' => 'View all posts in TRAVEL')); ?>
                                                                </aside>
                                                                <div class="post-content">
                                                                    <?php echo word_limiter($text, 20); ?> </div>
                                                                <div class="read-more">
                                                                    <?php echo anchor("news/single_page/?id=" . $this->encrypt->encode($nf_id, $enc_key), 'Read More'); ?>
                                                                </div>
                                                            </header>
                                                        </article>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                    }
                                }
                                ?>



                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- .entry-content -->

        </article>
        <!-- #post-## -->
    </div>

</div>
<section class="module highlight" wp-site-content wp-body-class wp-site-name wp-title wp-site-desc wp-header-image> 
    <div class="container"> 
        <div class="module-title hide"> 
            <h3 class="title"><span class="bg-1">World News</span></h3> 
            <h3 class="subtitle">Watch the latest news</h3> 
        </div>                         
        <!--========== BEGIN .ROW ==========-->                         
        <div class="row no-gutter"> 
            <!--========== BEGIN .COL-MD-6 ==========-->      
            <?php
            $thread = '';
            if (isset($news_feed) && !empty($news_feed)) {
                $l1 = 0;
                $news_feed_size = sizeof($news_feed) / 2;
                $news_feed_chunk = array_chunk($news_feed, $news_feed_size);
                ?>
                <div class="col-sm-6 col-md-6"> 
                    <!--========== BEGIN .NEWS ==========-->                                 
                    <div class="news"> 
                        <?php
                        if (isset($news_feed_chunk[0]) && !empty($news_feed_chunk[0])) {
//                            echo '<pre>';print_r($news_feed_chunk[0]);echo '</pre>';die;
                            foreach ($news_feed_chunk[0] as $key_nf => $value_nf) {
                                $nf_id = $value_nf['nf_id'];
                                $thread = json_decode($value_nf['thread'], true);
                                $text = $value_nf['text'];
                                if (isset($thread) && !empty($thread)) {
                                    $published_date = substr($thread['published'], 0, -6);
                                    $timezone = substr($thread['published'], -6);
                                    $date = new DateTime($published_date, new DateTimeZone('UTC'));
                                    $date->setTimezone(new DateTimeZone($timezone));
                                    $updated_published_date = $date->format('M j, Y');
                                    ?>
                                    <!-- Begin .item -->                                     
                                    <div class="item"> 
                                        <div class="item-image-1">
                                            <a class="img-link" href="#">
                                                <img class="img-responsive img-full" src="<?php echo ($thread['main_image'] == '' ? 'themes/backend/assets/dist/img/noimage.png' : $thread['main_image']); ?>" alt="">
                                            </a>
                                            <span>
                                                <?php echo anchor("news/single_page/?id=" . $this->encrypt->encode($nf_id, $enc_key), 'News', array('class' => 'label-1')); ?>
                                            </span>
                                        </div>                                         
                                        <div class="item-content"> 
                                            <div class="title-left title-style04 underline04"> 
                                                <h3>
                                                    <?php echo anchor("news/single_page/?id=" . $this->encrypt->encode($nf_id, $enc_key), word_limiter($thread['title'], 10)); ?>
                                                </h3> 
                                            </div>                                             
                                            <p><a href="#" target="_blank" class="external-link"><?php echo word_limiter($value_nf['text'], 20); ?></a></p> 
                                            <div>
                                                <?php echo anchor("news/single_page/?id=" . $this->encrypt->encode($nf_id, $enc_key), '<span class="read-more">Read More</span>', array('class' => 'label-1 hide', 'target' => '_blank')); ?>
                                            </div>                                             
                                        </div>                                         
                                    </div>                                     
                                    <!-- End .item -->                                     
                                    <?php
                                }
                            }
                        }
                        ?>
                    </div>
                </div>  
                <div class="col-sm-6 col-md-6"> 
                    <div class="news"> 
                        <?php
                        if (isset($news_feed_chunk[1]) && !empty($news_feed_chunk[1])) {
                            foreach ($news_feed_chunk[1] as $key_nf1 => $value_nf1) {
                                $nf_id1 = $value_nf1['nf_id'];
                                $thread1 = json_decode($value_nf1['thread'], true);
                                $text1 = $value_nf1['text'];
                                if (isset($thread1) && !empty($thread1)) {
                                    $published_date1 = substr($thread1['published'], 0, -6);
                                    $timezone1 = substr($thread1['published'], -6);
                                    $date1 = new DateTime($published_date1, new DateTimeZone('UTC'));
                                    $date1->setTimezone(new DateTimeZone($timezone1));
                                    $updated_published_date1 = $date1->format('M j, Y');
                                    ?>
                                    <!-- Begin .item -->                                     
                                    <div class="item"> 
                                        <div class="item-image-1">
                                            <a class="img-link" href="#">
                                                <img class="img-responsive img-full" src="<?php echo ($thread1['main_image'] == '' ? 'themes/backend/assets/dist/img/noimage.png' : $thread1['main_image']); ?>" alt="">
                                            </a>
                                            <span>
                                                <?php echo anchor("news/single_page/?id=" . $this->encrypt->encode($nf_id1, $enc_key), 'News', array('class' => 'label-1')); ?>
                                            </span>
                                        </div>                                         
                                        <div class="item-content"> 
                                            <div class="title-left title-style04 underline04"> 
                                                <h3>
                                                    <?php echo anchor("news/single_page/?id=" . $this->encrypt->encode($nf_id1, $enc_key), word_limiter($thread1['title'], 10)); ?>
                                                </h3> 
                                            </div>                                             
                                            <p><a href="#" target="_blank" class="external-link"><?php echo word_limiter($value_nf1['text'], 20); ?></a></p> 
                                            <div>
                                                <?php echo anchor("news/single_page/?id=" . $this->encrypt->encode($nf_id1, $enc_key), '<span class="read-more">Read More</span>', array('class' => 'label-1 hide', 'target' => '_blank')); ?>
                                            </div>                                             
                                        </div>                                         
                                    </div>                                     
                                    <!-- End .item -->                                     
                                    <?php
                                }
                            }
                        }
                    }
                    ?>
                </div>                                 
                <!--========== END .NEWS ==========-->                                 
            </div>                             
            <!--========== END .COL-MD-6 ==========-->                             


            <div class="col-12">
                <div class="blog-pagination d-flex">
                    <?php echo $pagination; ?>
                </div>
            </div>
        </div>                         
    </div>                     
</section>
