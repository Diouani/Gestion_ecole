<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container-scroller">
    
    <?php require APPROOT . '/views/inc/navbar.php'; ?>
   
    <div class="container-fluid page-body-wrapper">
        
        <?php require APPROOT . '/views/inc/sidebar.php'; ?>
       


        <div class="container col-sm-6">


            <h1 class="mb-3">Add Parent</h1>
            <form name="add_parent" onsubmit="return validation()" action="<?php echo URLROOT ?>/parents/add" method="POST">
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text">Full Name</span>
                    <input type="text" aria-label="First name" class="form-control" placeholder="First Name" name="parent_fname">
                    <input type="text" aria-label="Last name" class="form-control" placeholder="Last Name" name="parent_lname">
                </div>
                <select class="form-select mb-3" name="parent_gender">
                    <option selected>Genre</option>
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                    <option value="autre">Autre</option>
                </select>

                <input class="form-control mb-3" type="text" placeholder="Job" aria-label="default input example" name="parent_job">



                <div class="mb-3">
                    <label for="Adress" class="form-label">Adress</label>
                    <textarea class="form-control" id="Adress" rows="2" name="parent_adress"></textarea>
                </div>

                <input class="form-control mb-3" type="text" placeholder="Phone" aria-label="default input example" name="parent_phone">

                <input type="submit" class="btn btn-primary" value="Add Parent">
            </form>
        </div>



        </body>

        <script>
            function validation() {
                var fname =
                    document.forms["add_parent"]["parent_fname"];
                var lname =
                    document.forms["add_parent"]["parent_lname"];
                var gender =
                    document.forms["add_parent"]["parent_gender"];
                var job =
                    document.forms["add_parent"]["parent_job"];
                var adress =
                    document.forms["add_parent"]["parent_adress"];
                var phone =
                    document.forms["add_parent"]["parent_phone"];


                if (fname.value == "") {
                    window.alert("Please enter your first name.");
                    fname.focus();
                    return false;
                }

                if (lname.value == "") {
                    window.alert("Please enter your last name.");
                    lname.focus();
                    return false;
                }

                if (gender.value == "") {
                    window.alert(
                        "Please enter your gender");
                    gender.focus();
                    return false;
                }
                if (gender.selectedIndex < 1) {
                    alert("Please enter your gender");
                    gender.focus();
                    return false;
                }
                if (job.value == "") {
                    window.alert("Please enter your job");
                    job.focus();
                    return false;
                }


                if (adress.value == "") {
                    window.alert("Please enter your adress");
                    adress.focus();
                    return false;
                }

                if (phone.value == "") {
                    window.alert(
                        "Please enter your telephone number.");
                    phone.focus();
                    return false;
                }



                return true;
            }
        </script>

        </html>