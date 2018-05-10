<?php

$tm_bg_image = '';
if (isset($home_testimonial_bg_image) && !empty($home_testimonial_bg_image)) {
    $tm_bg_image = $home_testimonial_bg_image[0]['tmimg_bg'];
}

$pa_header = $pa_subheader = $pa_content = $pa_image = $pa_sideimage = $pa_buttontext = $pa_buttonlink = '';
if (isset($home_practiceareas) && !empty($home_practiceareas)) {
    $pa_header = $home_practiceareas[0]['pa_mainheader'];
    $pa_subheader = $home_practiceareas[0]['pa_subheader'];
    $pa_content = $home_practiceareas[0]['pa_content'];
    $pa_image = $home_practiceareas[0]['pa_image'];
    $pa_sideimage = $home_practiceareas[0]['pa_sideimage'];
    $pa_buttontext = $home_practiceareas[0]['pa_buttontext'];
    $pa_buttonlink = $home_practiceareas[0]['pa_buttonlink'];
}

$about_myself = $aboutus[0];


$about_timeline = $abt_timeline[0];

//$auHeaderTitle = $auHeaderSubtitle = $auContentMainTitle = $auContentSubTitle = $auContent = $auContentImage = $auSliderImage = '';
//if (isset($aboutus) && !empty($aboutus)) {
//    $auHeaderTitle = $aboutus[0]['au_header_title'];
//    $auHeaderSubtitle = $aboutus[0]['au_header_subtitle'];
//    $auContentMainTitle = $aboutus[0]['au_content_main_title'];
//    $auContentSubTitle = $aboutus[0]['au_content_sub_title'];
//    $auContent = $aboutus[0]['au_content'];
//    $auContentImage = $aboutus[0]['au_content_image'];
//    $auSliderImage = $aboutus[0]['au_slider_image'];
//}
?>

<?php

if (isset($home_slider_details) && !empty($home_slider_details)) {
    include APPPATH . 'views/template/home_slider.php';
}
?>

<?php

if (isset($about_pa) && !empty($about_pa)) {
    include APPPATH . 'views/practice_part/our_practices_part.php';
}
?>

<?php

if (isset($about_testimonial) && !empty($about_testimonial)) {
    include APPPATH . 'views/testimonial_part/testimonial_part.php';
}
?>

<?php

if (isset($attorney_skill_types) && !empty($attorney_skill_types)) {
    include APPPATH . 'views/skill_part/skill_part.php';
}
?>

<?php

if (isset($wcu) && !empty($wcu)) {
    include APPPATH . 'views/about_part/about_lawyers_part.php';
}
?>
<?php

if (isset($home_counter) && !empty($home_counter)) {
    include APPPATH . 'views/counter_part/counter_part.php';
}
?>

<?php

if (isset($attorney_details) && !empty($attorney_details)) {
    include APPPATH . 'views/team_part/team_part1.php';
}
?>
