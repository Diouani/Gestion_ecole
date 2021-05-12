<?php

class Students extends Controller
{


    public function __construct()
    {
        $this->studentModel = $this->model('student');
        $this->adminModel = $this->model('admin');
    }


    public function show()
    {
        $data = $this->studentModel->getstudents();


        $this->view('Students/ShowStudents', $data);
    }

    public function add()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [
                'student_fname' => $_POST['student_fname'],
                'student_lname' => $_POST['student_lname'],
                'student_gender' => $_POST['student_gender'],
                'student_parent' => $_POST['student_parent'],
                'student_class' => $_POST['student_class'],
                'student_teacher' => $_POST['student_teacher'],
                'student_adress' => $_POST['student_adress'],
                'student_birthday' => $_POST['student_birthday'],
                'student_email' => $_POST['student_email'],
            ];
            if ($this->studentModel->addStudent($data)) {
                redirect('students/show');
            } else {
                $infos = [
                    'error'  => 'cannot add student'
                ];
                $this->view('Students/AddStudent', $infos);
            }
        } else {
            $class = $this->adminModel->getClass();
            $subjects = $this->adminModel->getSubject();
            $parents = $this->adminModel->getParents();
            $teachers = $this->adminModel->getteachers();

            $data = [
                'class' => $class,
                'subject' => $subjects,
                'parent' => $parents,
                'teacher' => $teachers

            ];

            $this->view('Students/AddStudent', $data);
        }
    }
    public function update($id)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [
                'student_id' => $id,
                'student_fname' => $_POST['student_fname'],
                'student_lname' => $_POST['student_lname'],
                'student_gender' => $_POST['student_gender'],
                'student_parent' => $_POST['student_parent'],
                'student_class' => $_POST['student_class'],
                'student_teacher' => $_POST['student_teacher'],
                'student_adress' => $_POST['student_adress'],
                'student_birthday' => $_POST['student_birthday'],
                'student_email' => $_POST['student_email'],
            ];
            if ($this->studentModel->updateStudent($data)) {
                redirect('students/show');
            } else {
                // Some thing gone wrong
                die('RIP');
            }
        } else {
            $infos = $this->studentModel->getStudentById($id);
            $class = $this->adminModel->getClass();
            $subjects = $this->adminModel->getSubject();
            $parents = $this->adminModel->getParents();
            $teachers = $this->adminModel->getteachers();

            $data = [
                'infos' => $infos,
                'class' => $class,
                'subject' => $subjects,
                'parent' => $parents,
                'teacher' => $teachers

            ];
            $this->view('Students/UpdateStudent', $data);
        }
    }

    public function delete($id)
    {

        if ($this->studentModel->delete($id)) {
            redirect('students/show');
        } else {
            die('NO DELETE');
        }
    }
}
