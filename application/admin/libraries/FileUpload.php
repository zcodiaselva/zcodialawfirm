<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FileUpload
 *
 * @author Administrator
 */
class FileUpload {

    public $CI;

    public function __construct() {
        $this->CI = & get_instance();
        $this->CI->load->library("upload");
    }

    public function uploadfile($file, $filename, $folder_name = false) {//print_r($file);
       $chkfolder = $config = '';
        if (isset($folder_name) && !empty($folder_name)) {
            $chkfolder = './uploads/' . $folder_name;
            if (!file_exists($chkfolder)) {
                mkdir($chkfolder, 0777, true);
            }
            $config['upload_path'] = $chkfolder;
        } else {
            $config['upload_path'] = './uploads';
        }
        $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size'] = '500000'; 
        $config['file_name'] = $filename;

        $this->CI->upload->initialize($config);
        if (!$this->CI->upload->do_upload($file)) {
                     $error = array('error' => $this->CI->upload->display_errors());
                   echo '<pre>error_upload:';  print_r($error);die;
            return false;
        } else {
            return $this->CI->upload->data();
        }
    }

    public function cupload($file, $filename) {
        $config['upload_path'] = "uploads/";
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $filename;


        $this->CI->upload->initialize($config);
        if (!$this->CI->upload->do_upload($file)) {
            $error = array('error' => $this->CI->upload->display_errors());
            return false;
        } else {
            return $this->CI->upload->data();
        }
    }

    /* public function cupload1($file, $filename) {
      $status = "";
      $msg = "";
      $file_element_name = 'userfile';

      if ($status != "error")
      {
      $config['upload_path'] = './uploads/';
      $config['allowed_types'] = 'gif|jpg|png|doc|txt';
      $config['max_size'] = 1024 * 8;
      $config['encrypt_name'] = FALSE;

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload($file_element_name))
      {
      $status = 'error';
      $msg = $this->upload->display_errors('', '');
      }
      else
      {
      $data = $this->upload->data();
      $image_path = $data['full_path'];
      if(file_exists($image_path))
      {
      $status = "success";
      $msg = "File successfully uploaded";
      }
      else
      {
      $status = "error";
      $msg = "Something went wrong when saving the file, please try again.";
      }
      }
      @unlink($_FILES[$file_element_name]);
      }
      echo json_encode(array('status' => $status, 'msg' => $msg));
      } */
}

?>
