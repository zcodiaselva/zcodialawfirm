1<!-- Main content -->
<?php
//$auHeaderTitle = $auHeaderSubtitle = $auContentMainTitle = $auContentSubTitle = $auContent = $auContentImage = $auSliderImage = '';
//if (isset($about_me) && !empty($about_me)) {
//    $auHeaderTitle = $about_me[0]['au_header_title'];
//    $auHeaderSubtitle = $about_me[0]['au_header_subtitle'];
//    $auContentMainTitle = $about_me[0]['au_content_main_title'];
//    $auContentSubTitle = $about_me[0]['au_content_sub_title'];
//    $auContent = $about_me[0]['au_content'];
//    $auContentImage = $about_me[0]['au_content_image'];
//    $auSliderImage = $about_me[0]['au_slider_image'];
//}
?>

<section class="content-header">
    <h1>
        Home Page
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="admin.php/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Testimonial Slider</li>
    </ol>
</section>
<section class="content">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Testimonial Slider Settings</h3>

            <div class="box-tools pull-right hide">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="txtHomeTMSName">Name</label>
                        <input type="text" class="form-control HomeTMSName" id="txtHomeTMSName" value="<?php //echo //$auHeaderTitle;   ?>">
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">
                                <label>Testimonial User Image</label>
                                <div id="imgHomeTMSSliderPreview">
                                    <label for="imgHomeTMSSliderUpload" id="imgHomeTMSSliderLabel">Choose File</label>
                                    <input type="file"  class="HomeTMSSliderUpload" name="imgHomeTMSSliderUpload" id="imgHomeTMSSliderUpload"  value="<?php //echo $auSliderImage;   ?>"  accept="image/gif,image/jpeg,image/png" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">
                                <label>Testimonial Sign Image</label>
                                <div id="imgHomeTMSSliderSignPreview">
                                    <label for="imgHomeTMSSliderSignUpload" id="imgHomeTMSSliderSignLabel">Choose File</label>
                                    <input type="file"  class="HomeTMSSliderSignUpload" name="imgHomeTMSSliderSignUpload" id="imgHomeTMSSliderSignUpload"  value="<?php //echo $auSliderImage;   ?>"  accept="image/gif,image/jpeg,image/png" />
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="txtContentAboutMe">Content</label>
                        <textarea class="form-control homeTMS-content ContentTMS" id="txtHomeContentTMS"><?php //echo $auContent;   ?></textarea>
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary btnUpdateTMSlider"  onclick="home_tms_submit($(this))" >Submit</button>
        </div>
    </div>


</section>

<section class="content tmsItemsDT">

    <div class="row">
        <div class="col-md-12 tmsItems_list_dt">
            <div class="box box_border_top">
                <div class="box-header tms_dt1">
                    <h3 class="box-title">Testimonial Slider Items List</h3>
                </div>

                <div class="box-body no-padding tmsItems_list">
                    <table class="table table-striped tmslist_dt" cellspacing="0" id="tmslist_dt"  style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="dt_item_col tmsSlider">Name</th>
                                <th class="dt_content_col tmsSlider">Content</th>
                                <th class="dt_image_col tmsSlider">Image</th>
                                <th class="dt_image_col tmsSlider">Sign Image</th>
                                <th class="dt_status_col tmsSlider">Show / Hide</th>
                                <th class="dt_action_col tmsSlider">Action</th>
                            </tr>
                        </thead>

                    </table>
                </div> 
            </div>
        </div> 
    </div> 


</section>

<div class="modal fade" id="modal-delete_tmsitems">
    <div class="modal-dialog ">
        <div class="modal-content del_conf">
            <div class="modal-header">

                <h4 class="modal-title strong message" id="myModalLabel">Delete Confirmation</h4>
            </div>
            <div class="modal-body" id="modal-bodyku">Are you sure want to Delete?</div>
            <div class="modal-footer" >
                <button type="button"  id="yes_conform" class="confirm_delete_hts btn btn-primary yes_popup_button " onclick="del_testimonial_sliderItem($(this));">Yes</button>
                <button type="button"class="btn btn btn-danger nobutton" data-dismiss="modal">No</button> 

            </div>
        </div>
    </div>
</div>