<?php require 'application/views/bootstrap/header.php'; ?>

<h1><?php echo lang('forgot_password_heading'); ?></h1>
<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label); ?></p>

<div id="infoMessage"><?php echo $message; ?></div>

<?php echo form_open("auth/forgot_password", $attributes = 'class="form-signin"'); ?>

<p>
    <label for="email"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label); ?></label> <br />
    <?php echo form_input($email, $type = 'text', $class = 'form-control', $placeholder = 'Email address'); ?>
</p>

<p><?php echo form_submit($class = 'btn btn-success', $value = 'Send', 'submit'); ?></p>

<?php echo form_close(); ?>
<?php require 'application/views/bootstrap/footer.php'; ?>