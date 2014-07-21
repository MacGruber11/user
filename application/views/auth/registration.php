<?php require 'application/views/bootstrap/header.php'; ?>

<h1>Registration</h1>
<p><?php echo lang('create_user_subheading'); ?></p>

<?php echo form_open("auth/registration", $attributes = 'class="form-signin"'); ?>

<p>
    <?php echo lang('create_user_fname_label', 'first_name'); ?> <br />
    <?php echo form_input($first_name, $type = 'text', $class = 'form-control'); ?>
</p>

<p>
    <?php echo lang('create_user_lname_label', 'last_name'); ?> <br />
    <?php echo form_input($last_name, $type = 'text', $class = 'form-control'); ?>
</p>

<p>

    <?php echo lang('create_user_city_label', 'city'); ?> <br />
    <?php echo form_input($city, $type = 'text', $class = 'form-control typeahead-devs',
            $placeholder = '', $value = '', $extra = 'name="city" autocomplete="off"'); ?>

</p>


<p>
    <?php echo lang('create_user_email_label', 'email'); ?> <br />
    <?php echo form_input($email, $type = 'text', $class = 'form-control', $placeholder = 'Email address'); ?>
</p>

<p>
    <?php echo lang('create_user_phone_label', 'phone'); ?> <br />
    <?php echo form_input($phone, $type = 'text', $class = 'form-control'); ?>
</p>

<p>
    <?php echo lang('create_user_password_label', 'password'); ?> <br />
    <?php echo form_input($password, $type = 'password', $class = 'form-control', $placeholder = 'Password'); ?>
</p>

<p>
    <?php echo lang('create_user_password_confirm_label', 'password_confirm'); ?> <br />
    <?php echo form_input($password_confirm, $type = 'password', $class = 'form-control', $placeholder = 'Password confirm'); ?>
</p>


<p><?php echo form_submit($class = 'btn btn-lg btn-primary', $value = 'Create User', 'submit'); ?></p>

<?php echo form_close(); ?>
<?php require 'application/views/bootstrap/footer.php'; ?>
 