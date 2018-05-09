<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PracticeAreas extends CI_Controller {

    public $data;
    public $homeTestimonials = 'home_testimonials';
    public $TMS_table = 'testimonial_slider';
    public $home_slider = 'home_slider';
    public $home_slider_box = 'home_slider_box';
    public $home_testimonial_bg = 'home_testimonial_bg';
    public $practiceAreas = 'practiceareas';
    public $practiceAreaTypes = 'practicearea_types';
    public $practiceAreaDetail = 'practicearea_detail';
    public $timeline_table = 'aboutus_timeline';
    public $timelineitems_table = 'aboutus_timeline_items';
    public $aboutus_table = 'aboutus';
    public $aboutus_items_table = 'aboutus_items';
    public $appt_table = 'appointment';
    public $logo_table = 'logo';
    public $menu_table = 'main_menu';
    public $seo_page_table = 'seo_pages';
    public $seo_header_table = 'seo_header';
    public $home_counter = 'home_counter';
    public $aboutAttorney_table = 'attorney';
    public $attorney_items = 'attorney_items';
    public $attorney_social_table = 'attorney_social';
    public $social_table = 'social';
    public $attorney_skills_table = 'attorney_skills';
    public $attorney_skillsType_table = 'attorney_skills_type';
    public $attorney_experience_table = 'attorney_experience';
    public $attorney_experience_types_table = 'attorney_experience_type';
    public $wcu_table = 'wcu';
    public $wcuTypes_table = 'wcu_type';
    public $disclaimer_table = 'disclaimer';
    public $attorney_breadcrumb_table = 'attorney_breadcrumb';
    public $map_table = 'map';
    public $about_consultation_table = 'about_consultation';

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('pa_model');
        $this->load->model('home_model');
        $this->load->library('encrypt');
        $this->load->helper('text');

        $this->data['testimonial_slider_details'] = $this->pa_model->getData('*', $this->TMS_table, array('tms_status' => 1));
        $this->data['about_pa'] = $this->pa_model->getData('*', $this->practiceAreas, array('pa_status' => 1, 'pa_deleted' => 0));
        $this->data['practiceareas_items'] = $this->pa_model->getData('*', $this->practiceAreaTypes, array('pat_status' => 1, 'pat_deleted' => 0));
        $this->data['contactus_address'] = $this->pa_model->getData('c_name,c_content,c_icon', 'contactus', array('c_status' => 1, 'c_deleted' => 0, 'c_type' => 1));
        $this->data['contactus_social'] = $this->pa_model->getData('c_social_link,c_social_name', 'contactus', array('c_status' => 1, 'c_deleted' => 0, 'c_type' => 2));
        $this->data['contactus_footer'] = $this->pa_model->getData('c_footer_content', 'contactus', array('c_status' => 1, 'c_deleted' => 0, 'c_type' => 3));
        $this->data['google_map_entries'] = $this->pa_model->getData('*', $this->map_table, array('map_status' => 1, 'map_deleted' => 0));
        $this->data['appt_details'] = $this->pa_model->getData('*', $this->appt_table, array('appt_status' => 1, 'appt_deleted' => 0), 'appt_id');
        $this->data['logo_details'] = $this->pa_model->getData('*', $this->logo_table, array('logo_status' => 1, 'logo_deleted' => 0), 'logo_id');
        $this->data['attorney_skills'] = $this->pa_model->getData('*', $this->attorney_skills_table, array('atty_skill_status' => 1, 'atty_skill_deleted' => 0), 'atty_skill_id');
        $this->data['breadcrumb'] = $this->pa_model->getData('*', $this->attorney_breadcrumb_table, array('atty_bc_status' => 1, 'atty_bc_deleted' => 0), 'atty_bc_id');
        $this->data['footer_about'] = $this->pa_model->getData('c_content', 'contactus', array('c_name' => 'footer_content', 'c_status' => 1, 'c_deleted' => 0, 'c_type' => 1));

        $this->data['about_attorney'] = $this->pa_model->getData('*', $this->aboutAttorney_table, array('atty_status' => 1, 'atty_deleted' => 0), 'atty_id');
        $this->data['contact_address'] = $this->pa_model->getData('c_name,c_content,c_icon', 'contactus', array('c_name' => 'Address', 'c_status' => 1, 'c_deleted' => 0, 'c_type' => 1));
        $this->data['contact_email'] = $this->pa_model->getData('c_name,c_content,c_icon', 'contactus', array('c_name' => 'Email', 'c_status' => 1, 'c_deleted' => 0, 'c_type' => 1));
        $this->data['contact_call'] = $this->pa_model->getData('c_name,c_content,c_icon', 'contactus', array('c_name' => 'Call Us', 'c_status' => 1, 'c_deleted' => 0, 'c_type' => 1));
        // $this->data['footer_submenus'] = $this->home_model->getSubMenus();
        $this->data['footer_submenus'] = $this->pa_model->getData('*', $this->practiceAreaTypes, array('pat_home_flag' => 1, 'pat_status' => 1, 'pat_deleted' => 0));
        $this->data['about_consultation'] = $this->pa_model->getData('*', $this->about_consultation_table, array('abt_consult_status' => 1, 'abt_consult_deleted' => 0), 'abt_consult_id');
        $this->data['practicearea_category'] = $this->pa_model->getData('*', $this->practiceAreaDetail, array('pad_status' => 1, 'pad_deleted' => 0));
    }

    public function index() {

        $this->load->view('template/header', $this->data);
        $this->load->view('practice_part/practice_areas', $this->data);
        $this->load->view('template/footer', $this->data);
    }

    public function details() {
        $this->load->view('template/header', $this->data);
        $this->load->view('practice_part/practice_details_part', $this->data);
        $this->load->view('template/footer', $this->data);
    }

    public function getCategoryDetails() {
        $pat_id = '';
        $pat_id = $this->uri->segment(3);

        if ($pat_id > 0) {
            $this->data['practicearea_category'] = $this->pa_model->getData('*', $this->practiceAreaDetail, array('pad_status' => 1, 'pad_deleted' => 0, 'pat_id' => $pat_id));
        } else {
            $this->data['practicearea_category'] = $this->pa_model->getData('*', $this->practiceAreaDetail, array('pad_status' => 1, 'pad_deleted' => 0));
        }
        $this->data['selected_category'] = $this->uri->segment(4);
        $this->load->view('template/header', $this->data);
        $this->load->view('practice_part/practice_areas', $this->data);
        $this->load->view('template/footer', $this->data);
    }

    public function getContent() {
        $pad_id = '';

        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $pad_id = $this->encrypt->decode(str_replace(' ', '+', $_GET['id']));
        }
        if ($pad_id > 0) {
            $this->data['pa_content'] = $this->pa_model->getData('*', $this->practiceAreaDetail, array('pad_status' => 1, 'pad_deleted' => 0, 'pad_id' => $pad_id));
        }

        $this->load->view('template/header', $this->data);
        $this->load->view('practice_part/practice_details_part', $this->data);
        $this->load->view('template/footer', $this->data);
    }

    public function slider() {
        $this->load->view('temp');
    }

}
