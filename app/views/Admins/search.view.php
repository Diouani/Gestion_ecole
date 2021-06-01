<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container-scroller">

    <?php require APPROOT . '/views/inc/navbar.php'; ?>

    <div class="container-fluid page-body-wrapper">

        <?php require APPROOT . '/views/inc/sidebar.php'; ?>


        <div class="container ">
            <div class="row mt-5">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <?php if (!empty($data['teachers_search'])) { ?>
                                <h1>Teachers</h1>

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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($data['teachers_search'] as $value) :  ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $value->teacher_id  ?></td>
                                                <td><?php echo $value->teacher_fname  ?></td>
                                                <td><?php echo $value->teacher_lname  ?></td>
                                                <td><?php echo $value->teacher_class  ?></td>
                                                <td><?php echo $value->teacher_sub  ?></td>
                                                <td><?php echo $value->teacher_phone  ?></td>
                                                <td><?php echo $value->teacher_gender  ?></td>
                                                <td>
                                                    <ul class="list-inline m-0">

                                                        <li class="list-inline-item">
                                                            <a href="<?php echo URLROOT; ?>/teachers/update/<?php echo $value->teacher_id ?>"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit"></i></button></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="<?php echo URLROOT; ?>/teachers/delete/<?php echo $value->teacher_id ?>"></a><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>

                                </table>
                            <?php } else {
                                echo "No teacher found";
                            } ?>

                        </div>
                    </div>
                </div>
            </div>



            <div class="row mt-5">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">


                            <div class="container">
                                <?php if (!empty($data['students_search'])) { ?>
                                    <h1>Students</h1>
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
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <?php foreach ($data['students_search'] as $value) :  ?>
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
                                                    <td>
                                                        <ul class="list-inline m-0">

                                                            <li class="list-inline-item">
                                                                <a href="<?php echo URLROOT; ?>/students/update/<?php echo $value->student_id ?>"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit"></i></button></a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="<?php echo URLROOT; ?>/students/delete/<?php echo $value->student_id ?>"></a><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                            </tbody>

                                    </table>
                                <?php } else {
                                    echo "No student found";
                                } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row mt-5">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">


                            <div class="container">
                                <?php if (!empty($data['parents_search'])) { ?>
                                    <h1>Parents</h1>


                                    <table class="table table-hover table-bordered mt-5" id="table_parents">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Gender</th>
                                                <th>Job</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <?php foreach ($data['parents_search'] as $value) :  ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $value->parent_id  ?></td>
                                                    <td><?php echo $value->parent_fname  ?></td>
                                                    <td><?php echo $value->parent_lname  ?></td>
                                                    <td><?php echo $value->parent_gender  ?></td>
                                                    <td><?php echo $value->parent_job  ?></td>
                                                    <td><?php echo $value->parent_phone  ?></td>
                                                    <td><?php echo $value->parent_adress  ?></td>
                                                    <td>
                                                        <ul class="list-inline m-0">

                                                            <li class="list-inline-item">
                                                                <a href="<?php echo URLROOT; ?>/parents/update/<?php echo $value->parent_id ?>"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit"></i></button></a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="<?php echo URLROOT; ?>/parents/delete/<?php echo $value->parent_id ?>"><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                            </tbody>


                                    </table>

                                <?php } else {
                                    echo "No parent found";
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>