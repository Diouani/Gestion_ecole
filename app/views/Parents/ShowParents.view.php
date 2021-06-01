<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container-scroller">

    <?php require APPROOT . '/views/inc/navbar.php'; ?>
    
    <div class="container-fluid page-body-wrapper">

        <?php require APPROOT . '/views/inc/sidebar.php'; ?>


        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">Parents</p>

                            <div class="d-flex justify-content-end align-items-end ">

                                <a href="<?php echo URLROOT; ?>/parents/add"><button class="btn rounded-pill btn-primary"><i class="mdi mdi-plus text-dark"></i>Add Parents </button></a>

                            </div>

                            <div class="container">

                                <table class=" display table table-hover table-bordered mt-5" id="table_parents">
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
                                    <?php foreach ($data as $value) :  ?>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>

        <script>
            $(document).ready(function() {
                alert('test')
                $('#table_parents').DataTable();
            });
        </script>