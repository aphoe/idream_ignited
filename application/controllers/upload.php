<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('upload_model');
        $this->load->helper('form');
    }

    public function upload_image() {
        $this->Upload_model->do_upload();
    }
    
    public function index() {
        
        $data['title'] = 'Image Upload';
        
        if ($this->input->post('upload')) {
            $this->upload_model->do_upload();
        }
        $this->load->view('upload');
    }

}
