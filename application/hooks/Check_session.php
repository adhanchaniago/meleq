<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Check_session
{
        public function __construct()
        {
                $this->CI = &get_instance();
                $this->CI->load->library('session');
        }

        public function validate()
        {
            $exp=array('Login','AndroidJson');
            $ctrl=$this->CI->uri->segment(1);
            $var=$this->CI->session->userdata('sessauth');
            if ($ctrl==null) {

            } else {
                if(!in_array(strtolower($ctrl),$exp)){
                    if ($var <>1 ) {
                        // $this->CI->session->set_flashdata('notif',' <div class="note note-warning">Silahkan login terlebih dahulu</div>');
                        redirect('auth');
                        die();
                    }
                }
            }


        }
}