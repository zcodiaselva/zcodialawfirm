<!-- Map Area Start -->
<?php
$gmaplat = $gmaplong = $map_marker_image = '';
if (isset($google_map_enries) && !empty($google_map_enries)) {
    $gmaplat = $google_map_enries[0]['map_lat'];
    $gmaplong = $google_map_enries[0]['map_long'];
    $map_marker_image = $google_map_enries[0]['map_marker_image'];
}
?>
<div class="google-map">
    <div class="gmap3-area" data-lat="<?php echo $gmaplat; ?>" data-lng="<?php echo $gmaplong; ?>" data-mrkr="<?php echo $map_marker_image; ?>">
    </div><!-- /.google-map -->
</div><!-- /#map -->

<!-- Map Area end -->