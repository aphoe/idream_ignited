<?php

/**
 * Register page for the site
 * 
 * @author: aphoe
 * @copyright (c) 2013
 */

//Call form helper
$this->load->helper('form');

//Display Login form
echo form_open("", 'class="form-horizontal" id="logfrm"');
echo form_fieldset();

//Email field
$data_form = array(
    'type' => 'email',
    'name' => 'email',
    'id' => 'email',
    'placeholder' => 'Email address',
    'required' => 'true'
);
echo form_input($data_form);

//Password
$data_form = array(
    'name' => 'pword',
    'id' => 'pword',
    'placeholder' => 'Password',
    'required' => 'true'
);
echo form_password($data_form);

//Login button
form_submit('login', 'LOGIN', 'class="pull-right" id="login"');


echo form_fieldset_close();
echo form_close();

//Display registration form
?>
<h2><span class="icon-user"></span>User login</h2>
<?php
$form_attrib = array(
    'class' => 'form-horizontal',
    'id' => 'regform'
);
echo form_open('', $form_attrib);
echo form_fieldset();
//Full name field
$data_form = array(
    'type' => 'text',
    'placeholder' => 'Full name',
    'id' => 'fullname',
    'name' => 'fullname',
    'required' => 'true',
    'class' => ''
);
echo form_input($data_form);

//Email
$data_form = array(
    'type' => 'email',
    'placeholder' => 'Email address',
    'id' => 'mail',
    'name' => 'mail',
    'required' => 'true',
    'class' => ''
);
echo form_input($data_form);

//Password
$data_form = array(
    'placeholder' => 'Password',
    'id' => 'pword',
    'name' => 'pword',
    'required' => 'true',
    'class' => ''
);
echo form_password($data_form);

//Confirm password
$data_form = array(
    'type' => 'password',
    'placeholder' => 'Confirm password',
    'id' => 'cpwd',
    'name' => 'cpwd',
    'required' => 'true',
    'class' => ''
);
echo form_password($data_form);

//Accept site terms and condition
$data_form = array(
    'id' => 'chktos',
    'required' => 'true'
);

echo form_input($data_form);

//Accept terms
echo form_checkbox('chktos', 
        'I agree to <a href="#">Terms</a> and <a href="#">Policy</a> of the site', 
        FALSE, 
        $data_form);
//Submit form
$data_form = array(
    'value' => 'SIGN UP',
    'name' => 'submit',
    'id' => 'submit',
    'type' => 'submit',
    'class' => 'btn pull-right',
);
echo form_submit($data_form);
echo form_fieldset_close();


