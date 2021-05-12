<?php require APPROOT . '/views/inc/header.php'; ?>


<div class="container col-sm-6 mt-5">

    <pre><?php var_dump($data); ?></pre>
    <h1 class="mb-3">Update Student</h1>
    <form action="<?php echo URLROOT; ?>/students/update/<?php echo $data->student_id; ?>" class="form-control" method="POST">
        <div class="input-group mb-3 mt-3">
            <span class="input-group-text">Full Name</span>
            <input type="text" aria-label="First name" class="form-control" placeholder="First Name" name="student_fname" value="<?php echo $data->student_fname    ?>">
            <input type="text" aria-label="Last name" class="form-control" placeholder="Last Name" name="student_lname" value="<?php echo $data->student_lname    ?>">
        </div>
        <select class="form-select mb-3" aria-label="Default select example" name="student_gender">
            <option selected><?php echo $data->student_gender ?></option>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
            <option value="autre">Autre</option>
        </select>

        <select class="form-select mb-3" aria-label="Default select example" name="student_class">
            <option selected><?php echo $data->student_class ?></option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>


        <select class="form-select mb-3" aria-label="Default select example" name="student_parent">
            <option selected><?php echo $data->student_parent ?></option>
            <option value="1">Forloop</option>
        </select>

        <select class="form-select mb-3" aria-label="Default select example" name="student_teacher">
            <option selected><?php echo $data->student_teacher ?></option>
            <option value="ouadid">ouadid</option>
        </select>

        <div class="mb-3">
            <label for="Adress" class="form-label">Adress</label>
            <textarea class="form-control" id="Adress" rows="2" name="student_adress"><?php echo $data->student_adress    ?></textarea>
        </div>

        <input type="date" class="form-control mb-3" name="student_birthday" value="<?php echo $data->student_birthday    ?>">

        <input class="form-control mb-3" type="email" placeholder="Email Adress" aria-label="default input example" name="student_email" value="<?php echo $data->student_email   ?>">

        <input type="submit" class="btn btn-primary" value="Update Student">
    </form>
</div>



</body>

</html>