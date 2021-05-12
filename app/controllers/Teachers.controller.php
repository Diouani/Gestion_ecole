<?php

class Teachers extends Controller
{


    public function __construct()
    {
        $this->teacherModel = $this->model('teacher');
        $this->adminModel = $this->model('admin');
    }


    public function show()
    {
        $data = $this->teacherModel->getteachers();

        $this->view('teachers/ShowTeachers', $data);
    }

    public function add()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [
                'teacher_fname' => $_POST['teacher_fname'],
                'teacher_lname' => $_POST['teacher_lname'],
                'teacher_gender' => $_POST['teacher_gender'],
                'teacher_class' => $_POST['teacher_class'],
                'teacher_sub' => $_POST['teacher_sub'],
                'teacher_phone' => $_POST['teacher_phone']
            ];
            if ($this->teacherModel->addteacher($data)) {
                redirect('teachers/show');
            } else {
                $infos = [
                    'error'  => 'cannot add teacher'
                ];
                $this->view('teachers/Addteacher', $infos);
            }
        } else {

            $class = $this->adminModel->getClass();
            $subjects = $this->adminModel->getSubject();

            $data = [
                'class' => $class,
                'subject' => $subjects

            ];

            $this->view('teachers/Addteacher', $data);
        }
    }
    public function update($id)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [
                'teacher_id' => $id,
                'teacher_fname' => $_POST['teacher_fname'],
                'teacher_lname' => $_POST['teacher_lname'],
                'teacher_gender' => $_POST['teacher_gender'],
                'teacher_class' => $_POST['teacher_class'],
                'teacher_sub' => $_POST['teacher_sub'],
                'teacher_phone' => $_POST['teacher_phone']
            ];
            if ($this->teacherModel->updateteacher($data)) {
                redirect('teachers/show');
            } else {
                // Some thing gone wrong
                die('RIP');
            }
        } else {
            $result = $this->teacherModel->getteacherById($id);

            $this->view('teachers/Updateteacher', $result);
        }
    }

    public function delete($id)
    {

        if ($this->teacherModel->delete($id)) {
            redirect('teachers/show');
        } else {
            die('NO DELETE');
        }
    }
}
