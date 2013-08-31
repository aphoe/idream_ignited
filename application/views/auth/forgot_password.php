<h1><span class="icon-user"></span><?php echo lang('forgot_password_heading');?></h1>
<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/forgot_password");?>

      <p>
      	
      	<?php echo form_input($email, '', 'placeholder="Email address"');?>
      </p>

      <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'), 'class="btn"');?></p>

<?php echo form_close();?>