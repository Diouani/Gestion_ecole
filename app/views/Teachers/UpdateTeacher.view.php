<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container col-sm-6">
    <h1 class="mb-3">Update Teacher</h1>
    <form action="<?php echo URLROOT ?>/teachers/update/<?php echo $data->teacher_id; ?>" class="form-control" method="POST">
        <div class="input-group mb-3 mt-3">
            <span class="input-group-text">Full Name</span>
            <input type="text" aria-label="First name" class="form-control" placeholder="First Name" name="teacher_fname" value="<?php echo $data->teacher_fname ?>">
            <input type="text" aria-label="Last name" class="form-control" placeholder="Last Name" name="teacher_lname" value="<?php echo $data->teacher_lname ?>">
        </div>
        <select class="form-select mb-3" aria-label="Default select example" name="teacher_gender">
            <option selected><?php echo $data->teacher_gender ?></option>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
            <option value="autre">Autre</option>
        </select>



        <select class="form-select mb-3" aria-label="Default select example" name="teacher_class">
            <option selected><?php echo $data->teacher_class ?></option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>

        <select class="form-select mb-3" aria-label="Default select example" name="teacher_sub">
            <option selected><?php echo $data->teacher_sub ?></option>
            <option value="1">Forloop</option>
        </select>


        <input class="form-control mb-3" type="text" placeholder="Phone" aria-label="default input example" name="teacher_phone" value="<?php echo $data->teacher_phone ?>">


        <input type="submit" class="btn btn-primary" value="Update Teacher">
    </form>
</div>



</body>

</html>