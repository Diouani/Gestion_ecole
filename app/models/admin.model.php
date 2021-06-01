<?php


class admin 
{


    public function __construct()
    {
        $this->database = new Database;
    }


    public function numberStudentsInClass()
    {
        $this->database->query("SELECT * FROM students WHERE `student_class` = '1' ");
        $this->database->resultSet();
        $class1 = $this->database->rowCount();

        $this->database->query("SELECT * FROM students WHERE `student_class` = '2'");
        $this->database->resultSet();
        $class2 = $this->database->rowCount();

        $this->database->query("SELECT * FROM students WHERE `student_class` = '3'");
        $this->database->resultSet();
        $class3 = $this->database->rowCount();

        $student_class = [
            'class1' => $class1,
            'class2' => $class2,
            'class3' => $class3
        ];
        return $student_class;
    }


    public function numberstudents()
    {
        // preparation de la query 
        $this->database->query("SELECT * FROM students");

        // execution de la query / fetch all
        $this->database->resultSet();
        $result = $this->database->rowCount();
        return $result;
    }
    public function numberparents()
    {
        // preparation de la query 
        $this->database->query("SELECT * FROM parents");

        // execution de la query / fetch all
        $this->database->resultSet();
        $result = $this->database->rowCount();
        return $result;
    }
    public function numberteachers()
    {
        // preparation de la query 
        $this->database->query("SELECT * FROM teachers");

        // execution de la query / fetch all
        $this->database->resultSet();
        $result = $this->database->rowCount();
        return $result;
    }

    public function genderStudents()
    {
        // preparation de la query 
        $this->database->query("SELECT * FROM `students` WHERE `student_gender` = 'homme' ");

        // execution de la query / fetch all
        $this->database->resultSet();
        $result = $this->database->rowCount();
        return $result;
    }


    public function getStudents()
    {
        // preparation de la query 
        $this->database->query("SELECT * FROM students");

        // execution de la query / fetch all
        $result = $this->database->resultSet();

        return $result;
    }

    public function getClass()
    {


        $this->database->query("SELECT * FROM `class`");


        $result = $this->database->resultSet();

        return $result;
    }


    public function getSubject()
    {


        $this->database->query("SELECT * FROM `subjects`");


        $result = $this->database->resultSet();

        return $result;
    }

    public function getparents()
    {
        // preparation de la query 
        $this->database->query("SELECT * FROM parents");

        // execution de la query / fetch all
        $result = $this->database->resultSet();

        return $result;
    }

    public function getteachers()
    {
        // preparation de la query 
        $this->database->query("SELECT * FROM teachers");

        // execution de la query / fetch all
        $result = $this->database->resultSet();

        return $result;
    }

    public function login($username, $password)
    {
        $this->database->query("SELECT * FROM `admins` WHERE admin_username = :username  AND admin_password = :password");
        $this->database->bind(':username', $username);
        $this->database->bind(':password', $password);
        $row = $this->database->single();


        if ($row = $this->database->single()) {
            return $row;
        } else {
            return false;
        }
    }
    public function search()
    {

        if (isset($_POST['search'])) {

            $key = $_POST['search'];
            $this->database->query("SELECT * FROM `teachers` WHERE `teacher_fname` LIKE '$key' OR `teacher_lname` LIKE '$key' OR`teacher_class` LIKE '$key' OR `teacher_sub` LIKE '$key' OR `teacher_phone` LIKE '$key' OR `teacher_gender` LIKE '$key' ");
            $teachers_search = $this->database->resultSet();


            $this->database->query("SELECT * FROM `students` WHERE `student_fname`LIKE '$key' OR`student_lname` LIKE '$key' OR`student_class`LIKE '$key' OR`student_gender`LIKE '$key' OR`student_teacher`LIKE '$key' OR`student_adress`LIKE '$key' OR`student_parent`LIKE '$key' OR`student_birthday`LIKE '$key' OR`student_email`LIKE '$key'
            ");
            $students_search = $this->database->resultSet();

            $this->database->query("SELECT * FROM `parents` WHERE `parent_fname`LIKE '$key' OR`parent_lname`LIKE '$key' OR`parent_gender`LIKE '$key' OR`parent_job`LIKE '$key' OR`parent_phone`LIKE '$key' OR`parent_adress`LIKE '$key'
            ");
            $parents_search = $this->database->resultSet();

            $data = [
                'teachers_search' => $teachers_search,

                'students_search' => $students_search,

                'parents_search' => $parents_search,
            ];

            return $data;
        } else {
            die('Not Found');
        }
    }
}
