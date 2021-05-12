<?php require APPROOT . '/views/inc/header.php'; ?>

<pre><?php var_dump($data) ?></pre>

<div class="container col-sm-6 mt-5">
    <h1 class="mb-3">Add Student</h1>
    <form action="<?php echo URLROOT; ?>/students/add" class="form-control" method="POST">
        <div class="input-group mb-3 mt-3">
            <span class="input-group-text">Full Name</span>
            <input type="text" aria-label="First name" class="form-control" placeholder="First Name" name="student_fname">
            <input type="text" aria-label="Last name" class="form-control" placeholder="Last Name" name="student_lname">
        </div>
        <select class="form-select mb-3" aria-label="Default select example" name="student_gender">
            <option selected>Genre</option>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
            <option value="autre">Autre</option>
        </select>

        <select class="form-select mb-3"  name="student_class">
            <option selected>Class</option>
            <?php foreach ($data['class'] as $value) :    ?>
                <option value="<?php echo $value->class_id ?>"><?php echo $value->class_name ?></option>
            <?php endforeach;    ?>
        </select>


        <select class="form-select mb-3"name="student_parent">
            <option selected>Parent</option>
            <?php foreach ($data['parent'] as $value) :    ?>
                <option value="<?php echo $value->parent_id ?>"><?php echo $value->parent_fname . ' ' . $value->parent_lname  ?></option>
            <?php endforeach;    ?>
        </select>

        <select class="form-select mb-3"  name="student_teacher">
            <option selected>Teacher</option>
            <?php foreach ($data['teacher'] as $value) :    ?>
                <option value="<?php echo $value->teacher_id ?>"><?php echo $value->teacher_fname . ' ' . $value->teacher_lname  ?></option>
            <?php endforeach;    ?>
        </select>

        <div class="mb-3">
            <label for="Adress" class="form-label">Adress</label>
            <textarea class="form-control" id="Adress" rows="2" name="student_adress"></textarea>
        </div>

        <input type="date" class="form-control mb-3" name="student_birthday">

        <input class="form-control mb-3" type="email" placeholder="Email Adress" aria-label="default input example" name="student_email">

        <input type="submit" class="btn btn-primary" value="Add Student">
    </form>
</div>



</body>

</html>