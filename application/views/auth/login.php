<?php require 'application/views/bootstrap/header.php'; ?>

<div id="infoMessage"><?php echo $message; ?></div>

<?php echo form_open("auth/login", $attributes = 'class="form-signin"'); ?>
<h2 class="form-signin-heading">Please sign in</h2>
<p>

    <?php echo form_input($identity, $type = 'text', $class = 'form-control', $placeholder = 'Email address'); ?>
</p>

<p>

    <?php echo form_input($password, $type = 'password', $class = 'form-control', $placeholder = 'Password'); ?>
</p>

<p>
    <label class="checkbox">
        <?php echo lang('login_remember_label', 'remember'); ?>
        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
    </label>
</p>

<p><?php echo form_submit($class = 'btn btn-lg btn-primary btn-block', $value = 'Sign in', 'submit'); ?></p>
<p><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></p>
<p><a href="registration">Registration</a></p>
<?php echo form_close(); ?>



<?php require 'application/views/bootstrap/footer.php'; ?>