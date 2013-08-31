<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of upload_model
 *
 * @author Developer
 */
class Upload_model extends CI_Model {

    public $original_path;
    public $resized_path;
    public $thumbs_path;

    //initialize the path where you want to save your images
    function __construct() {
        parent::__construct();
        //return the full path of the directory
        //make sure these directories have read and write permessions
        $this->original_path = realpath(APPPATH . '../uploads/original');
        $this->resized_path = realpath(APPPATH . '../uploads/resized');
        $this->thumbs_path = realpath(APPPATH . '../uploads/thumbs');        
    }
    
    function do_upload() {
        $this->load->library('image_lib');
        $uploadConfig = array(
            'allowed_types' => 'jpg|jpeg|gif|png', //only accept these file types
            'max_size' => 4096, //4MB max
            'upload_path' => $this->original_path //upload directory
        );

        $this->load->library('upload', $uploadConfig);
        $this->upload->do_upload(); //upload the image
        $image_data = $this->upload->data(); // get the image data
         
        //your desired config for the resize() function
        $imgConfig = array(
            'source_image' => $image_data['full_path'], //path to the uploaded image
            'new_image' => $this->resized_path, //path to
            'maintain_ratio' => true,
            'width' => 128,
            'height' => 128
        );

        //this is the magic line that enables you generate multiple thumbnails
        //you have to call the initialize() function each time you call the resize()
        //otherwise it will not work and only generate one thumbnail
        $this->image_lib->initialize($imgConfig);
        $this->image_lib->resize();

        $config = array(
            'source_image' => $image_data['full_path'],
            'new_image' => $this->thumbs_path,
            'maintain_ratio' => true,
            'width' => 36,
            'height' => 36
        );
        //here is the second thumbnail, notice the call for the initialize() function again
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
    }

}

