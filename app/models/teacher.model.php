<?php

class teacher

{
    private $database;
    public function __construct()
    {
        $this->database = new Database;
    }

    public function getteachers()
    {
        // preparation de la query 
        $this->database->query("SELECT * FROM teachers");

        // execution de la query / fetch all
        $result = $this->database->resultSet();

        return $result;
    }


    public function getteacherById($id)
    {
        // preparation de la query 
        $this->database->query("SELECT * FROM `teachers` WHERE `teacher_id` = :id");

        $this->database->bind(':id', $id);

        // execution de la query / fetch all
        $result = $this->database->single();

        return $result;
    }






    public function addteacher($data)
    {

        // preparation de la query 
        $this->database->query("INSERT INTO `teachers`( `teacher_fname`, `teacher_lname`, `teacher_class`, `teacher_gender`, `teacher_sub`,`teacher_phone`) 
        VALUES (:teacher_fname, :teacher_lname, :teacher_class, :teacher_gender, :teacher_sub, :teacher_phone)");


        // bind the values with placeholders

        $this->database->bind(':teacher_fname', $data['teacher_fname']);
        $this->database->bind(':teacher_lname', $data['teacher_lname']);
        $this->database->bind(':teacher_class', $data['teacher_class']);
        $this->database->bind(':teacher_gender', $data['teacher_gender']);
        $this->database->bind(':teacher_sub', $data['teacher_sub']);
        $this->database->bind(':teacher_phone', $data['teacher_phone']);

        if ($this->database->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function updateteacher($data)
    {

        // preparation de la query 
        $this->database->query("UPDATE `teachers` SET `teacher_fname`=:teacher_fname,`teacher_lname`=:teacher_lname,`teacher_class`=:teacher_class,`teacher_gender`=:teacher_gender,`teacher_sub`=:teacher_sub,`teacher_phone`=:teacher_phone WHERE `teacher_id` = :teacher_id");

        $this->database->bind(':teacher_id', $data['teacher_id']);
        $this->database->bind(':teacher_fname', $data['teacher_fname']);
        $this->database->bind(':teacher_lname', $data['teacher_lname']);
        $this->database->bind(':teacher_class', $data['teacher_class']);
        $this->database->bind(':teacher_gender', $data['teacher_gender']);
        $this->database->bind(':teacher_sub', $data['teacher_sub']);
        $this->database->bind(':teacher_phone', $data['teacher_phone']);



        if ($this->database->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function deleteteacher($id)
    {

        $this->database->query("DELETE FROM `teachers` WHERE `teacher_id` = :teacher_id");
        $this->database->bind(':teacher_id', $id);

        if ($this->database->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
