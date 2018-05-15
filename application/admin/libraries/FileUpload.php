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

    public function uploadfile($file, $filename, $folder_name = false) {
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
            echo '<pre>error_upload:';
            print_r($error);
            die;
            return false;
        } else {
            return $this->CI->upload->data();
        }
    }

    public function upload_files($file, $filename, $folder_name = false) {

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
        $config['file_name'] = $filename;

        $this->CI->upload->initialize($config);

        if (!$this->CI->upload->do_upload($file)) {
            $error = array('error' => $this->CI->upload->display_errors());
            echo '<pre>error_upload:';
            print_r($error);
            die;
            return false;
        } else {
            return $this->CI->upload->data();
        }
    }

    public function custom_file_upload($file, $foldername = false) {
        $date = new DateTime();
        if (!empty($_FILES[$file]['name'])) {
            $info = new SplFileInfo($_FILES[$file]['name']);
            $file_name = $date->getTimestamp() . $file . '.' . $info->getExtension();
            if ($this->uploadfile($file, $file_name, $foldername)) {
                if (isset($foldername) && !empty($foldername)) {
                    $upd_foldername = $foldername . '/';
                    $file_name = 'uploads/' . $upd_foldername . $file_name;
                } else {
                    $file_name = 'uploads/' . $file_name;
                }
            }
        }
      
        return $file_name;
    }

}

?>
