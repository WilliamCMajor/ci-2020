<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>

  <p class="form-group">
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity,'',"class='form-control'");?>
  </p>

  <p class="form-group">
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password,'',"class='form-control'");?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'), "class='btn btn-outline-primary'");?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
<p><a href="../register">Register new account</a></p>