
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

  $image = array(
    'name'  =>  'userfile',
    'id'    =>  'userfile',
    );
     
  $submit = array(
    'name'  => 'upload',
    'id'    => 'upload',
    'value' => 'Upload'
    );
?>
<?php echo form_open_multipart('upload', 'id=upload_file'); ?>
<?php echo form_upload($image); ?>
<?php echo form_submit($submit); ?>
<?php echo form_close(); ?>
