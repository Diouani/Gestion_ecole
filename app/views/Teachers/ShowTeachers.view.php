<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container">
    <?php foreach ($data as $value) :  ?>
        <table class="table table-hover table-bordered mt-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Class</th>
                    <th>Subject</th>
                    <th>Phone</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $value->teacher_id  ?></td>
                    <td><?php echo $value->teacher_fname  ?></td>
                    <td><?php echo $value->teacher_lname  ?></td>
                    <td><?php echo $value->teacher_class  ?></td>
                    <td><?php echo $value->teacher_sub  ?></td>
                    <td><?php echo $value->teacher_phone  ?></td>
                    <td><?php echo $value->teacher_gender  ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>

        </table>
</div>