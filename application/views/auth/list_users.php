<?php require 'application/views/bootstrap/header.php'; ?>

<div id="title">
    <h1><?php echo lang('index_heading'); ?></h1>
    <p><?php echo lang('index_subheading'); ?></p>
</div>

<table class="table table-bordered table-hover">
    <tr>
        <th><?php echo lang('index_fname_th'); ?></th>
        <th><?php echo lang('index_lname_th'); ?></th>
        <th><?php echo lang('index_email_th'); ?></th>

    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user->first_name; ?></td>
            <td><?php echo $user->last_name; ?></td>
            <td><?php echo $user->email; ?></td>

        </tr>
    <?php endforeach; ?>
</table>

<?php require 'application/views/bootstrap/footer.php'; ?>


