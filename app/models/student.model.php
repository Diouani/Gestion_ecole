<?php

class student

{
    private $database;
    public function __construct()
    {
        $this->database = new Database;
    }

    public function getStudents()
    {
        // preparation de la query 
        $this->database->query("SELECT * FROM students");

        // execution de la query / fetch all
        $result = $this->database->resultSet();

        return $result;
    }


    public function getStudentById($id)
    {
        // preparation de la query 
        $this->database->query("SELECT * FROM `students` WHERE `student_id` = :id");

        $this->database->bind(':id', $id);

        // execution de la query / fetch all
        $result = $this->database->single();

        return $result;
    }






    public function addStudent($data)
    {

        // preparation de la query 
        $this->database->query("INSERT INTO `students`( `student_fname`, `student_lname`, `student_class`, `student_gender`, `student_teacher`, `student_adress`, `student_parent`, `student_birthday`, `student_email`) 
        VALUES (:student_fname, :student_lname, :student_class, :student_gender, :student_teacher, :student_adress, :student_parent, :student_birthday, :student_email)");


        // bind the values with placeholders

        $this->database->bind(':student_fname', $data['student_fname']);
        $this->database->bind(':student_lname', $data['student_lname']);
        $this->database->bind(':student_class', $data['student_class']);
        $this->database->bind(':student_gender', $data['student_gender']);
        $this->database->bind(':student_teacher', $data['student_teacher']);
        $this->database->bind(':student_adress', $data['student_adress']);
        $this->database->bind(':student_parent', $data['student_parent']);
        $this->database->bind(':student_birthday', $data['student_birthday']);
        $this->database->bind(':student_email', $data['student_email']);




        if ($this->database->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function updateStudent($data)
    {

        // preparation de la query 
        $this->database->query("UPDATE `students` SET `student_fname`=:student_fname,`student_lname`=:student_lname,`student_class`=:student_class,`student_gender`=:student_gender,`student_teacher`=:student_teacher,`student_adress`=:student_adress,`student_parent`=:student_parent,`student_birthday`=:student_birthday,`student_email`=:student_email WHERE `student_id` = :student_id");

        $this->database->bind(':student_id', $data['student_id']);
        $this->database->bind(':student_fname', $data['student_fname']);
        $this->database->bind(':student_lname', $data['student_lname']);
        $this->database->bind(':student_class', $data['student_class']);
        $this->database->bind(':student_gender', $data['student_gender']);
        $this->database->bind(':student_teacher', $data['student_teacher']);
        $this->database->bind(':student_adress', $data['student_adress']);
        $this->database->bind(':student_parent', $data['student_parent']);
        $this->database->bind(':student_birthday', $data['student_birthday']);
        $this->database->bind(':student_email', $data['student_email']);



        if ($this->database->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function deleteStudent($id)
    {

        $this->database->query("DELETE FROM `students` WHERE `student_id` = :student_id");
        $this->database->bind(':student_id', $id);

        if ($this->database->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
