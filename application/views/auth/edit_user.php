<?php require 'application/views/bootstrap/header.php'; ?>
<div id="title">
    <h1><?php echo lang('edit_user_heading'); ?></h1>
    <p><?php echo lang('edit_user_subheading'); ?></p>
</div>
<div id="infoMessage"><?php echo $message; ?></div>

<?php echo form_open(uri_string(), $attributes = 'class="form-signin"'); ?>

<p>
    <?php echo lang('edit_user_fname_label', 'first_name'); ?> <br />
    <?php echo form_input($first_name, $type = 'text', $class = 'form-control'); ?>
</p>

<p>
    <?php echo lang('edit_user_lname_label', 'last_name'); ?> <br />
    <?php echo form_input($last_name, $type = 'text', $class = 'form-control'); ?>
</p>

<p>
    <?php echo lang('edit_user_company_label', 'company'); ?> <br />
    <?php echo form_input($city, $type = 'text', $class = 'form-control'); ?>
</p>

<p>
    <?php echo lang('edit_user_phone_label', 'phone'); ?> <br />
    <?php echo form_input($phone, $type = 'text', $class = 'form-control'); ?>
</p>



<?php if ($this->ion_auth->is_admin()): ?>

    <h3><?php echo lang('edit_user_groups_heading'); ?></h3>
    <?php foreach ($groups as $group): ?>
        <label class="checkbox">
            <?php
            $gID = $group['id'];
            $checked = null;
            $item = null;
            foreach ($currentGroups as $grp) {
                if ($gID == $grp->id) {
                    $checked = ' checked="checked"';
                    break;
                }
            }
            ?>
            <input type="checkbox" name="groups[]" value="<?php echo $group['id']; ?>"<?php echo $checked; ?>>
            <?php echo $group['name']; ?>
        </label>
    <?php endforeach ?>

<?php endif ?>

<?php echo form_hidden('id', $user->id); ?>
<?php echo form_hidden($csrf); ?>

<p><?php echo form_submit($class = 'btn btn-lg btn-success', $value = 'Save User', 'submit'); ?></p>

<?php echo form_close(); ?>

<?php require 'application/views/bootstrap/footer.php'; ?>
