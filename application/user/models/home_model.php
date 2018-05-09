<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home_model extends CI_Model {

    public $TMS_table = 'testimonial_slider';
    public $aboutAttorney_table = 'attorney';
    public $attorney_items = 'attorney_items';
    public $attorney_social_table = 'attorney_social';
    public $social_table = 'social';

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function getData($select, $from, $where = false, $order_by = false, $limit = false) {
        $query = '';
        $this->db->select($select);

        if (isset($order_by) && !empty($order_by)) {
            $this->db->order_by($order_by, "desc");
        }
        if (isset($limit) && !empty($limit)) {
            $this->db->limit($limit);
        }
        if (isset($where) && !empty($where)) {
            $query = $this->db->get_where($from, $where);
        } else {
            $this->db->from($from);
            $query = $this->db->get();
        }
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function getSubMenus_old() {
        $this->db->select('sm.menu_id, sm.menu_text,sm.url');
        $this->db->from('main_menu m');
        $this->db->join('main_menu sm', 'm.menu_id = sm.parent_id');
        $this->db->like('m.menu_text', 'practice');
        $this->db->where('m.parent_id', 0);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
     function getAttorneyData() {

        $array = array();
        $result_array = array();
        $menu_id = array();
        $query = $this->db->query('select * from attorney_items where attyItem_status = 1 and attyItem_deleted = 0 order by attyItem_id desc');
        $result['attorney'] = $query->result_array();

        foreach ($result['attorney'] as $key => $value) {

            $sql1 = "SELECT * FROM `attorney_social` 
                join social on social.social_id = attorney_social.social_id 
                 join attorney_items on attorney_items.attyItem_id = attorney_social.attyItem_id  
                where attorney_social.attySocial_status =1 and attorney_social.attySocial_deleted = 0 and 
                social.social_status = 1 and social.social_deleted = 0 and attorney_social.attyItem_id = " . $value['attyItem_id'];

            $query1 = $this->db->query($sql1);
            $result1 = $query1->result_array();
            $result['attorney'][$key]['social'] = $result1;
        }



        return $result;
    }

    function getMenuData() {
        $array = array();
        $result_array = array();
        $menu_id = array();
        $query = $this->db->query('select * from main_menu where menu_deleted = 0 and menu_status = 1 and parent_id != menu_id order by menu_id asc');
        $result = $query->result_array();

        foreach ($result as $key => $value) {
            $parent_id = $value['menu_id']; //submenu id
            $sql1 = 'select menu_id, menu_text, parent_id,url from main_menu where menu_deleted = 0 and menu_status = 1 and parent_id != menu_id and parent_id = ' . $parent_id;
            $query1 = $this->db->query($sql1);
            $result1 = $query1->result_array();
            $result_array['result'][$key] = array('menu_id' => $value['menu_id'], 'menu_text' => $value['menu_text'], 'parent_id' => $value['parent_id'],
                'url' => $value['url']);
            foreach ($result1 as $key1 => $value1) {
                $result_array['result'][$key]['List'][] = array('menu_id' => $value1['menu_id'], 'menu_text' => $value1['menu_text'], 'parent_id' => $value1['parent_id'], 'url' => $value1['url']);
            }
        }
        $new_array = array();
        $md_array = array();
        foreach ($result_array as $key2 => $value2) {
            foreach ($value2 as $key3 => $value3) {
                if ($value3['parent_id'] == 0) {
                    $md_array[] = $key3;
                }
            }
        }
        foreach ($md_array as $key) {
            $new_array[$key] = $result_array['result'][$key];
        }
        $result = array_values($new_array);

        return $result;
    }

}
