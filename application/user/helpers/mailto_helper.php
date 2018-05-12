<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
if (!function_exists('send_mail')) {

    function send_mail($array) {

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'murali.zt91emp24@gmail.com',
            'smtp_pass' => 'zt91emp24',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        $this->email->set_header('Content-type', 'text/html');

        $this->email->from($array[0]['from']);
        $this->email->to($array[0]['to']);
        $this->email->subject($array[0]['subject']);
        $this->email->message($array[0]['message']);
        return $status = $this->email->send();
    }

}