<h2><?php echo lang('create_user_heading');?></h2>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_user", 'class="form-horizontal"');
echo form_fieldset();
echo form_input($first_name);
echo form_input($email);
echo form_input($password);
echo form_input($password_confirm);
echo form_submit('submit', lang('create_user_submit_btn'), 'class="btn"');
echo form_fieldset_close();
echo form_close();

?>
