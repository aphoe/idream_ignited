<?php

/**
 * Register page for the site
 * 
 * @author: aphoe
 * @copyright (c) 2013
 */

//Call form helper
$this->load->helper('form');

//Display form
?>
<h2><span class="icon-user"></span>User login</h2>
<?php
$form_attrib = array(
    'class' => 'form-horizontal',
    'id' => 'regform'
);
echo form_open('', $form_attrib);
echo form_fieldset();
//
echo '<div class="control-group>';

echo '</div>';

echo form_fieldset_close();


