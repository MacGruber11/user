<?php require 'application/views/bootstrap/header.php'; ?>
<div id="title">
<div id="infoMessage">
    
    <?php echo $message; ?></div>

<h1><?php echo lang('index_heading'); ?></h1>
<p><?php echo lang('index_subheading'); ?></p>
</div>
<div class="row">
    <div class="col-md-2">
        <?php echo form_open("auth/create_user", $attributes = 'class="form-inlane"'); ?>
        <p><?php echo form_submit($class = 'btn btn-primary', $value = 'Create User', 'submit'); ?></p>
        <?php echo form_close(); ?>
    </div>
    <div class="col-md-2">
        <?php echo form_open("auth/create_group", $attributes = 'class="form-inlane"'); ?>
        <p><?php echo form_submit($class = 'btn btn-info', $value = 'Create Group', 'submit'); ?></p>
        <?php echo form_close(); ?>
    </div>
</div>



<table class="table table-bordered table-hover">
    <tr>
        <th><?php echo lang('index_fname_th'); ?></th>
        <th><?php echo lang('index_lname_th'); ?></th>
        <th><?php echo lang('index_email_th'); ?></th>
        <th><?php echo lang('index_groups_th'); ?></th>
        <th><?php echo lang('index_status_th'); ?></th>
        <th><?php echo lang('index_action_th'); ?></th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user->first_name; ?></td>
            <td><?php echo $user->last_name; ?></td>
            <td><?php echo $user->email; ?></td>
            <td>
                <?php foreach ($user->groups as $group): ?>
                    <?php echo anchor("auth/edit_group/" . $group->id, $group->name); ?><br />
                <?php endforeach ?>
            </td>
            <td><?php echo ($user->active) ? anchor("auth/deactivate/" . $user->id, lang('index_active_link')) : anchor("auth/activate/" . $user->id, lang('index_inactive_link')); ?></td>
            <td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?> / <?php echo anchor("auth/delete_user/".$user->id, 'Delete') ;?></td>
        </tr>
        
    <?php endforeach; ?>
</table>


<?php require 'application/views/bootstrap/footer.php'; ?>