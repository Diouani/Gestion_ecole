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
                    <th>Gender</th>
                    <th>Teacher</th>
                    <th>Address</th>
                    <th>Parent</th>
                    <th>Birthday</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $value->student_id  ?></td>
                    <td><?php echo $value->student_fname  ?></td>
                    <td><?php echo $value->student_lname  ?></td>
                    <td><?php echo $value->student_class  ?></td>
                    <td><?php echo $value->student_gender  ?></td>
                    <td><?php echo $value->student_teacher  ?></td>
                    <td><?php echo $value->student_adress  ?></td>
                    <td><?php echo $value->student_parent  ?></td>
                    <td><?php echo $value->student_birthday  ?></td>
                    <td><?php echo $value->student_email  ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>

        </table>
</div>