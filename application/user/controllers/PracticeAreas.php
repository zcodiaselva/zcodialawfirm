<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PracticeAreas extends CI_Controller {

    public $TMS_table = 'testimonial_slider';
    public $practiceAreas = 'practiceareas';
    public $practiceAreaTypes = 'practicearea_types';
    public $map_table = 'map';

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('pa_model');
    }

    public function index() {
        $data['testimonial_slider_details'] = $this->pa_model->getData('*', $this->TMS_table, array('tms_status' => 1));
        $data['about_pa'] = $this->pa_model->getData('*', $this->practiceAreas, array('pa_status' => 1, 'pa_deleted' => 0));
        $data['practiceareas_items'] = $this->pa_model->getData('*', $this->practiceAreaTypes, array('pat_status' => 1, 'pat_deleted' => 0));
        $data['contactus_address'] = $this->pa_model->getData('c_name,c_content,c_icon', 'contactus', array('c_status' => 1, 'c_deleted' => 0, 'c_type' => 1));
        $data['contactus_social'] = $this->pa_model->getData('c_social_link,c_social_name', 'contactus', array('c_status' => 1, 'c_deleted' => 0, 'c_type' => 2));
        $data['contactus_footer'] = $this->pa_model->getData('c_footer_content', 'contactus', array('c_status' => 1, 'c_deleted' => 0, 'c_type' => 3));
        $data['google_map_entries'] = $this->pa_model->getData('*', $this->map_table, array('map_status' => 1, 'map_deleted' => 0));

        $this->load->view('template/header', $data);
        $this->load->view('practice-areas', $data);
        $this->load->view('template/footer', $data);
    }

    public function slider() {
        $this->load->view('temp');
    }

}
