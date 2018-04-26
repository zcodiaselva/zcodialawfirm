<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AboutUs extends CI_Controller {

    public $aboutus_table = 'aboutus';
    public $aboutus_items_table = 'aboutus_items';
    public $timeline_table = 'aboutus_timeline';
    public $timelineitems_table = 'aboutus_timeline_items';
    public $contacts_table = 'contactus';
    public $footer_table = 'footer';
    public $seo_page_table = 'seo_pages';
    public $seo_header_table = 'seo_header';

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('aboutus_model');
       // $this->load->library('ConvertColorCode');
    }

    public function index() {
        $data['aboutus'] = $this->aboutus_model->getData('*', $this->aboutus_table, array('au_status' => 1, 'au_deleted' => 0));
        $data['aboutus_items'] = $this->aboutus_model->getData('*', $this->aboutus_items_table, array('auti_status' => 1, 'auti_deleted' => 0));
        $data['abt_timeline'] = $this->aboutus_model->getData('*', $this->timeline_table, array('aut_status' => 1, 'aut_deleted' => 0));
        $data['abt_timelineitems'] = $this->aboutus_model->getData('*', $this->timelineitems_table, array('autli_status' => 1, 'autli_deleted' => 0), 'autli_id');
        $data['contactus_address'] = $this->aboutus_model->getData('*', 'contactus', array('c_status' => 1, 'c_deleted' => 0, 'c_type' => 1));
        $data['contactus_social'] = $this->aboutus_model->getData('*', 'contactus', array('c_status' => 1, 'c_deleted' => 0, 'c_type' => 2));
        $data['contactus_footer'] = $this->aboutus_model->getData('*', 'contactus', array('c_status' => 1, 'c_deleted' => 0, 'c_type' => 3));
        $data['seo_header'] = $this->aboutus_model->getData('*', $this->seo_header_table, array('sh_status' => 1, 'sh_deleted' => 0), 'sh_id');
        $data['seo_page'] = $this->aboutus_model->getData('*', $this->seo_page_table, array('sp_name' => ($this->uri->segment(1) == '' ? 'Home' : ''), 'sp_status' => 1, 'sp_deleted' => 0));

        $this->load->view('template/header', $data);
        $this->load->view('about-us', $data);
        $this->load->view('template/footer', $data);
    }

    public function slider() {
        $this->load->view('temp');
    }

    function upload_img_status() {
        $selector = $this->input->post('selector');

        if ($selector == 1) {
            $this->session->set_userdata("aboutus_header_img", "1");
        }
        if ($selector == 2) {
            $this->session->set_userdata("aboutus_content_img", "1");
        }
        echo $selector;
    }

}
