<div id="infoMessage"><?php echo $message;?></div>

<?php 
echo form_open("auth/login", 'class="form-horizontal"');
echo form_input($identity, '', 'placeholder="Email"');
echo form_input($password, '', 'placeholder="Password"');
echo lang('login_remember_label', 'remember');
echo form_checkbox('remember', '1', FALSE, 'id="remember"');
echo form_submit('submit', lang('login_submit_btn'), 'class="pull-right"');
echo form_close();
?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>