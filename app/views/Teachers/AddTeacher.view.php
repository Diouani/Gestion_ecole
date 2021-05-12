<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container col-sm-6">
    <h1 class="mb-3">Add Teacher</h1>
    <form action="<?php echo URLROOT ?>/teachers/add" class="form-control" method="POST">
        <div class="input-group mb-3 mt-3">
            <span class="input-group-text">Full Name</span>
            <input type="text" aria-label="First name" class="form-control" placeholder="First Name" name="teacher_fname">
            <input type="text" aria-label="Last name" class="form-control" placeholder="Last Name" name="teacher_lname">
        </div>
        <select class="form-select mb-3" aria-label="Default select example" name="teacher_gender">
            <option selected>Genre</option>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
            <option value="autre">Autre</option>
        </select>



        <select class="form-select mb-3" aria-label="Default select example" name="teacher_class">
            <option selected>Class</option>
            <?php foreach ($data['class'] as $value) :    ?>
                <option value="<?php echo $value->class_id ?>"><?php echo $value->class_name ?></option>
            <?php endforeach;    ?>
        </select>

        <select class="form-select mb-3" aria-label="Default select example" name="teacher_sub">
            <option selected>Matiére</option>
            <?php foreach ($data['subject'] as $value) :    ?>
                <option value="<?php echo $value->subject_id ?>"><?php echo $value->subject_name ?></option>
            <?php endforeach;    ?>
        </select>


        <input class="form-control mb-3" type="text" placeholder="Phone" aria-label="default input example" name="teacher_phone">


        <input type="submit" class="btn btn-primary" value="Add Teacher">
    </form>
</div>



</body>

</html>