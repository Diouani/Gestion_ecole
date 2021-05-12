<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container col-sm-6">
    <h1 class="mb-3">Update Parent</h1>

    <form action="<?php echo URLROOT ?>/parents/update/<?php echo $data->parent_id; ?>" class="form-control" method="POST">
        <div class="input-group mb-3 mt-3">
            <span class="input-group-text">Full Name</span>
            <input type="text" aria-label="First name" class="form-control" placeholder="First Name" name="parent_fname" value="<?php echo $data->parent_fname ?>">
            <input type="text" aria-label="Last name" class="form-control" placeholder="Last Name" name="parent_lname" value="<?php echo $data->parent_lname ?>">
        </div>
        <select class="form-select mb-3" aria-label="Default select example" name="parent_gender">
            <option selected><?php echo $data->parent_gender ?></option>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
            <option value="autre">Autre</option>
        </select>

        <input class="form-control mb-3" type="text" placeholder="Job" aria-label="default input example" name="parent_job" value="<?php echo $data->parent_job ?>">



        <div class="mb-3">
            <label for="Adress" class="form-label">Adress</label>
            <textarea class="form-control" id="Adress" rows="2" name="parent_adress"><?php echo $data->parent_adress ?></textarea>
        </div>

        <input class="form-control mb-3" type="text" placeholder="Phone" aria-label="default input example" name="parent_phone" value="<?php echo $data->parent_phone ?>">

        <input type="submit" class="btn btn-primary" value="Update Parent">
    </form>
</div>



</body>

</html>