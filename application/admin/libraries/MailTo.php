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
class MailTo {

    public $CI;

    public function __construct() {
        $this->CI = & get_instance();
        $config = Array(
           // 'protocol' => 'smtp',
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'murali.zt91emp24@gmail.com',
            'smtp_pass' => 'zt91emp24',
            'mailtype' => 'html', 'starttls'  => true,'newline'   => "\r\n",
            'charset' =>  'utf-8',
            'wordwrap' => TRUE
        );

        $this->CI->load->library('email', $config);
    }

    public function send_mail($array) {
       
//        $this->CI->email->set_newline("\r\n");
//        $this->CI->email->set_header('MIME-Version', '1.0; charset=utf-8');
//        $this->CI->email->set_header('Content-type', 'text/html');

        $this->CI->email->from($array['from'],$array['name']);
        $this->CI->email->to($array['to']);
        $this->CI->email->subject($array['subject']);
        $this->CI->email->message($array['message']);
        return $status = $this->CI->email->send();
    }

}
