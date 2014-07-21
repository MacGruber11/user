<?php require 'application/views/bootstrap/header.php'; ?>
<div id="title">
    <h1>Profile</h1>
</div>
<div class="row">
    <div class="col-md-5">
        <table class="table table-bordered table-hover">

            <?php foreach ($users as $item): ?>
                <tr> 
                    <td>First Name</td>
                    <td><?php echo $item->first_name; ?></td>
                </tr>
                <tr> 
                    <td>Last Name</td>
                    <td><?php echo $item->last_name; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo $item->email; ?></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><?php echo $item->city; ?></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><?php echo $item->phone; ?></td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <?php echo form_open("auth/change_password", $attributes = 'class="form-inlane"'); ?>
        <p><?php echo form_submit($class = 'btn btn-primary', $value = 'Change Password', 'submit'); ?></p>
        <?php echo form_close(); ?>
    </div>
</div>


<?php require 'application/views/bootstrap/footer.php'; ?>

