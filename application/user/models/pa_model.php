<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pa_model extends CI_Model {

    public $practiceAreas = 'practiceareas';
    public $practiceAreaTypes = 'practicearea_types';

    function __construct() {
        parent::__construct();
        $ci = & get_instance();
    }

    function searchContent($tablename, $where = false) {
        $this->db->select('*');
        $this->db->from($tablename);
        if (isset($where) && !empty($where)) {
            $this->db->where($where);
        }
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        } else {
            return 0;
        }
    }

    function deleteData($from, $where, $array) {
        $this->db->where($where);
        $res = $this->db->update($from, $array);
        return $res;
    }

    function insertData($tablename, $array) {
        return $this->db->insert($tablename, $array);
    }

    function updateData($tablename, $array, $where) {
        $this->db->where($where);
        return $this->db->update($tablename, $array);
    }

    function getData($select, $from, $where = false, $order_by = false) {
        $query = '';
        $this->db->select($select);
        if (isset($order_by) && !empty($order_by) && empty($sort_by)) {
            $this->db->order_by($order_by, "desc");
        } else if (isset($sort_by) && !empty($sort_by)) {
            $this->db->order_by($order_by, $sort_by);
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

}
