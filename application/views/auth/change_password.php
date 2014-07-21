<?php require 'application/views/bootstrap/header.php'; ?>

<div id="title">
    <h1>Change Password</h1>
</div>
<div class="col-md-4">
<?php echo form_open("auth/change_password",$attributes = 'class="form-reg"'); ?>

<p>
    <?php echo lang('change_password_old_password_label', 'old_password'); ?> <br />
    <?php echo form_input($old_password, $type = 'password', $class = 'form-control', $placeholder = 'Old Password'); ?>
</p>

<p>
    <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length); ?></label> <br />
    <?php echo form_input($new_password, $type = 'password', $class = 'form-control', $placeholder = 'New Password'); ?>
</p>

<p>
    <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm'); ?> <br />
    <?php echo form_input($new_password_confirm,$type = 'password', $class = 'form-control', $placeholder = 'New Password Confirm'); ?>
</p>

<?php echo form_input($user_id); ?>
<p><?php echo form_submit($class = 'btn btn-lg btn-success', $value = 'Change', 'submit'); ?></p>

<?php echo form_close(); ?>
</div>
<?php require 'application/views/bootstrap/footer.php'; ?>