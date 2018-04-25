function clearEditor(selector) {
    var content = $(selector);
    var contentPar = content.parent()
    contentPar.find('.wysihtml5-toolbar').remove()
    contentPar.find('iframe').remove()
    contentPar.find('input[name*="wysihtml5"]').remove()
    content.show()
    $(selector).val('');
    $(selector).wysihtml5();
}

function pa_submit() {
    var error = false;
    var txtPAMainHeader = $("#txtPAMainHeader").val();
    var txtPASubHeader = $("#txtPASubHeader").val();
    var txtPAContent = $("textArea#txtPAContent").val();
    var txtPAButtonText = $("#txtPAButtonText").val();
    var txtPAButtonLink = $('#txtPAButtonLink').select2('val');

    if (!txtPAMainHeader) {
        info_msg('Header text is empty!!');
        error = true;
    } else if (!txtPASubHeader) {
        info_msg('Sub Header text is empty!!');
        error = true;
    } else if (!txtPAContent) {
        info_msg('Content is empty!!');
        error = true;
    } else if (!txtPAButtonText) {
        info_msg('Button Text is empty!!');
        error = true;
    } else if (!txtPAButtonLink) {
        info_msg('Button Link is empty!!');
        error = true;
    }

    if (error == false) {
        var form_data = new FormData();
        form_data.append('pa_mainheader', txtPAMainHeader);
        form_data.append('pa_subheader', txtPASubHeader);
        form_data.append('pa_content', txtPAContent);
        form_data.append('pa_buttontext', txtPAButtonText);
        form_data.append('pa_buttonlink', txtPAButtonLink);
        form_data.append('pa_image', $('#imgPAUpload').prop('files')[0]);
        form_data.append('pa_sideimage', $('#imgPASideUpload').prop('files')[0]);

        $.ajax({
            method: "POST",
            url: "admin.php/practice/update_about_pa",
            data: form_data, contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data == 1) {
                    success_msg('Updated Successfully!!!');
                } else {
                    error_msg('Updation Failed!!!');
                }
            }
        });
    }
}

function getPATItemDetails(thss) { // get PracticeArea Item details
    var pat_id = $(thss).attr('pat_id');
    $.ajax({
        method: "POST",
        url: "admin.php/practice/getPATDetails",
        data: {pat_id: pat_id}
    }).done(function (msg) {
        if (msg !== '')
        {
            var myObj = jQuery.parseJSON(msg);
            $("#txtPATMainHeader").val(myObj[0].pat_header);
             $("#txtPATIcon").val(myObj[0].pat_icon_class);
            //fillEditor('#txtPATContent', myObj[0].pat_content);
            $("#txtPATContent").val(myObj[0].pat_content);
            if (myObj[0].pat_icon !== '') {
                $('#imgPATLabel').html("CHANGE FILE");
                $("#imgPATPreview").css("background-image", 'url(' + myObj[0].pat_icon + ')').css("background-position", 'center').css("background-repeat", 'no-repeat').css("background-size", "contain");
            }
            $(".btnUpdatePAT").attr("pat_id", myObj[0].pat_id);
        }
    });
}
function delPATItemDetails(thss) {
    $('.confirm_delete_patItem').attr('pat_id', thss.attr('pat_id'));
}

function del_patItem(thss) { // delete testimonial slider item - from modal
    $.ajax({
        method: "POST",
        url: "admin.php/practice/deletePATDetail",
        data: {pat_id: thss.attr('pat_id')}
    }).done(function (msg) {
        if (msg !== '')
        {
            $('.nobutton').trigger('click');
            success_msg("Deleted Successfully!!!");
            var table = 0;
            if (table != 0) {
                table.destroy();
            }
            table = $('#patlist_dt').DataTable();
            table.ajax.reload();

        } else {
            error_msg("Failed to delete..");
        }
    });
}

function change_dt_pat_status(thss) { // temstimonial items - status change - datatable
    var pat_id = $(thss).attr('pat_id');
    var pat_status = ($(thss).attr('pat_status') == 1 ? 0 : 1);
    $.ajax({
        method: "POST",
        url: "admin.php/practice/update_pat_status",
        data: {pat_id: pat_id, pat_status: pat_status}
    }).done(function (msg) {
        if (msg !== '')
        {
            success_msg('Status changed successfully');
        } else {
            error_msg('Failed to change Status');
        }
        var table = 0;
        if (table != 0) {
            table.destroy();
        }
        table = $('#pat_list_dt').DataTable();
        table.ajax.reload();
    });
}

function pat_submit(thss) {
    var error = false;
    var txtPAMainHeader = $("#txtPATMainHeader").val();
    var txtPATIcon = $("#txtPATIcon").val();
    var txtPATContent = $("#txtPATContent").val();
    var icon = $('#imgPATUpload').prop('files')[0];
    var pat_id = $(thss).attr('pat_id');
    if (!txtPAMainHeader) {
        info_msg('Header text is empty!!');
        error = true;
    } else if (!txtPATContent) {
        info_msg('Content is empty!!');
        error = true;
    } else if (!txtPATIcon) {
        info_msg('Icon Class should not be empty!!');
        error = true;
    }
//    else if (typeof icon == "undefined") {
//        var bg = $("#imgPATPreview").css("background-image");
//        bg = bg.replace(/.*\s?url\([\'\"]?/, '').replace(/[\'\"]?\).*/, '');
//        if (bg == '') {
//            info_msg('Please upload an image!!');
//            error = true;
//        }
//    }

    if (error == false) {
        var form_data = new FormData();
        form_data.append('pat_header', txtPAMainHeader);
        form_data.append('pat_icon_class', txtPATIcon);
        form_data.append('pat_content', txtPATContent);
        form_data.append('pat_icon', $('#imgPATUpload').prop('files')[0]);
        if (typeof (pat_id) !== 'undefined') {
            form_data.append('pat_id', pat_id);
        } else {
            form_data.append('pat_id', '');
        }
        $.ajax({
            method: "POST",
            url: "admin.php/practice/update_about_pat",
            data: form_data, contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data == 1) {
                    $("#txtPATMainHeader").val("");
                    $("#txtPATIcon").val("");
                    //clearEditor("#txtPATContent");
                    $("#txtPATContent").val('');
                    document.getElementById("imgPATUpload").value = "";
                    $("#imgPATPreview").removeAttr("style");
                    $("#imgPATLabel").html("CHOOSE FILE");
                    $(".btnUpdatePAT").removeAttr("pat_id");
                    success_msg('Practice Area Item Updated Successfully!!!');

                    var table = 0;
                    if (table != 0) {
                        table.destroy();
                    }
                    table = $('#patlist_dt').DataTable();
                    table.ajax.reload();


                } else {
                    error_msg('Updation Failed!!!');
                }
            }
        });
    }
}