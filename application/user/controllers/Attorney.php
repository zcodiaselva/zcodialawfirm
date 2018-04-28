<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Attorney extends CI_Controller {

    public $homeTestimonials = 'home_testimonials';
    public $TMS_table = 'testimonial_slider';
    public $home_slider = 'home_slider';
    public $home_slider_box = 'home_slider_box';
    public $home_testimonial_bg = 'home_testimonial_bg';
    public $practiceAreas = 'practiceareas';
    public $practiceAreaTypes = 'practicearea_types';
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

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('attorney_model');
    }

    public function index() {
        $data['about_attorney'] = $this->attorney_model->getData('*', $this->aboutAttorney_table, array('atty_status' => 1, 'atty_deleted' => 0), 'atty_id');
        $data['attorney_details'] = $this->attorney_model->getAttorneyData();
        $data['attorney_skills'] = $this->attorney_model->getData('*', $this->attorney_skills_table, array('atty_skill_status' => 1, 'atty_skill_deleted' => 0), 'atty_skill_id');
        $data['attorney_skill_types'] = $this->attorney_model->getData('*', $this->attorney_skillsType_table, array('atty_st_status' => 1, 'atty_st_deleted' => 0), 'atty_st_id');
        $data['attorney_experience'] = $this->attorney_model->getData('*', $this->attorney_experience_table, array('atty_exp_status' => 1, 'atty_exp_deleted' => 0), 'atty_exp_id');
        $data['attorney_experience_types'] = $this->attorney_model->getData('*', $this->attorney_experience_types_table, array('atty_et_status' => 1, 'atty_et_deleted' => 0), 'atty_et_id');
        $data['disclaimer'] = $this->attorney_model->getData('*', $this->disclaimer_table, array('disclaimer_status' => 1, 'disclaimer_deleted' => 0), 'disclaimer_id', 3);
        $data['appt_details'] = $this->attorney_model->getData('*', $this->appt_table, array('appt_status' => 1, 'appt_deleted' => 0), 'appt_id');
        $data['logo_details'] = $this->attorney_model->getData('*', $this->logo_table, array('logo_status' => 1, 'logo_deleted' => 0), 'logo_id');
        $data['contact_address'] = $this->attorney_model->getData('c_name,c_content,c_icon', 'contactus', array('c_name' => 'Address', 'c_status' => 1, 'c_deleted' => 0, 'c_type' => 1));
        $data['contact_email'] = $this->attorney_model->getData('c_name,c_content,c_icon', 'contactus', array('c_name' => 'Email', 'c_status' => 1, 'c_deleted' => 0, 'c_type' => 1));
        $data['contact_call'] = $this->attorney_model->getData('c_name,c_content,c_icon', 'contactus', array('c_name' => 'Call Us', 'c_status' => 1, 'c_deleted' => 0, 'c_type' => 1));
        $data['contactus_social'] = $this->attorney_model->getData('c_social_link,c_social_name', 'contactus', array('c_status' => 1, 'c_deleted' => 0, 'c_type' => 2));
        $data['contactus_footer'] = $this->attorney_model->getData('c_footer_content', 'contactus', array('c_status' => 1, 'c_deleted' => 0, 'c_type' => 3));
        $data['attorney_breadcrumb'] = $this->attorney_model->getData('*', $this->attorney_breadcrumb_table, array('atty_bc_status' => 1, 'atty_bc_deleted' => 0), 'atty_bc_id');
        $data['google_map_enries'] = $this->attorney_model->getData('*', $this->map_table, array('map_status' => 1, 'map_deleted' => 0));

        $this->load->view('template/header', $data);
        $this->load->view('attorney/attorney_team3', $data);
        $this->load->view('template/footer', $data);
    }

}
