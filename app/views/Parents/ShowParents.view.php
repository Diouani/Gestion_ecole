<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container">
    <?php foreach ($data as $value) :  ?>
        <table class="table table-hover table-bordered mt-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Job</th>
                    <th>Phone</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $value->parent_id  ?></td>
                    <td><?php echo $value->parent_fname  ?></td>
                    <td><?php echo $value->parent_lname  ?></td>
                    <td><?php echo $value->parent_gender  ?></td>
                    <td><?php echo $value->parent_job  ?></td>
                    <td><?php echo $value->parent_phone  ?></td>
                    <td><?php echo $value->parent_adress  ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>

        </table>
</div>