<?php


class Admins extends Controller
{



    public function __construct()
    {
        $this->adminModel = $this->model('admin');
    }



    public function search()
    {


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($data = $this->adminModel->search()) {


                $this->view('Admins/search', $data);


            } else {
                $data = [
                    "Search not found"
                ];
            }
        }
    }

    public function index()
    {

        $stats_gender = $this->adminModel->genderStudents();



        $students = $this->adminModel->numberstudents();


        $teachers = $this->adminModel->numberteachers();


        $parents = $this->adminModel->numberparents();

        $class_students = $this->adminModel->numberStudentsInClass();

        $data = [
            'students' => $students,
            'teachers' => $teachers,
            'parents' => $parents,
            'gender_student' => $stats_gender,
            'class_students' => $class_students
        ];



        $this->view('Admins/Index', $data);
    }

    public function show($data)
    {

        switch ($data) {
            case "student":
                redirect("students/show");
                break;
            case "parent":
                redirect("parents/show");
                break;
            case "teacher":
                redirect("teachers/show");
                break;
            default:
                die("ERROR SWITCH SHOW");
        }
    }



    public function add($data)
    {

        switch ($data) {
            case "student":
                redirect("students/add");
                break;
            case "parent":
                redirect("parents/add");
                break;
            case "teacher":
                redirect("teachers/add");
                break;
            default:
                die("ERROR SWITCH ADD");
        }
    }

    public function update($data)
    {

        switch ($data[0]) {
            case "student":
                redirect("students/update/<?php echo $data[1] ?>");
                break;
            case "parent":
                redirect("parents/update/<?php echo $data[1] ?>");
                break;
            case "teacher":
                redirect("teachers/update/<?php echo $data[1] ?>");
                break;
            default:
                die("ERROR SWITCH UPDATE");
        }
    }


    public function delete($data)
    {
        switch ($data[0]) {
            case "student":
                redirect("students/delete/<?php echo $data[1] ?>");
                break;
            case "parent":
                redirect("parents/delete/<?php echo $data[1] ?>");
                break;
            case "teacher":
                redirect("teachers/delete/<?php echo $data[1] ?>");
                break;
            default:
                die("ERROR SWITCH DELETE");
        }
    }

    public function login()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'username_err' => '',
                'password_err' => '',
            ];

            // Validate username
            if (empty($data['username'])) {
                $data['username_err'] = 'Pleae enter username';
            }

            // Validate Password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter password';
            }



            // Make sure errors are empty
            if (empty($data['username_err']) && empty($data['password_err'])) {
                // Validated
                // Check and set logged in user
                $loggedInUser = $this->adminModel->login($data['username'], $data['password']);

                if ($loggedInUser) {
                    // Create Session
                    $this->createAdminSession($loggedInUser);
                } else {
                    $data['password_err'] = 'Password incorrect';

                    $this->view('Admins/login', $data);
                }
            } else {
                // Load view with errors
                $this->view('Admins/login', $data);
            }
        } else {
            // Init data
            $data = [
                'username' => '',
                'password' => '',
                'username_err' => '',
                'password_err' => '',
            ];

            // Load view
            $this->view('Admins/login', $data);
        }
    }

    public function createAdminSession($data)
    {
        $_SESSION['admin'] = $data;
        redirect('');
    }

    public function logout()
    {
        session_destroy();
        redirect('');
    }
}
