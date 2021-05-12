<?php


class parent_
{
    private $database;

    public function __construct()
    {
        $this->database = new Database;
    }

    public function getparents()
    {
        // preparation de la query 
        $this->database->query("SELECT * FROM parents");

        // execution de la query / fetch all
        $result = $this->database->resultSet();

        return $result;
    }


    public function getparentById($id)
    {
        // preparation de la query 
        $this->database->query("SELECT * FROM `parents` WHERE `parent_id` = :id ");

        $this->database->bind(':id', $id);


        $result = $this->database->single();

        return $result;
    }






    public function addparent($data)
    {

        // preparation de la query 
        $this->database->query("INSERT INTO `parents`( `parent_fname`, `parent_lname`, `parent_gender`, `parent_job`, `parent_phone`, `parent_adress`) VALUES (:parent_fname, :parent_lname, :parent_gender, :parent_job, :parent_phone, :parent_adress)");


        // bind the values with placeholders

        $this->database->bind(':parent_fname', $data['parent_fname']);
        $this->database->bind(':parent_lname', $data['parent_lname']);
        $this->database->bind(':parent_gender', $data['parent_gender']);
        $this->database->bind(':parent_adress', $data['parent_adress']);
        $this->database->bind(':parent_job', $data['parent_job']);
        $this->database->bind(':parent_phone', $data['parent_phone']);




        if ($this->database->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function updateparent($data)
    {

        // preparation de la query 
        $this->database->query("UPDATE `parents` SET `parent_fname`=:parent_fname,`parent_lname`=:parent_lname,`parent_gender`=:parent_gender,`parent_job`=:parent_job,`parent_adress`=:parent_adress,`parent_phone`=:parent_phone WHERE `parent_id` = :parent_id");

        $this->database->bind(':parent_id', $data['parent_id']);
        $this->database->bind(':parent_fname', $data['parent_fname']);
        $this->database->bind(':parent_lname', $data['parent_lname']);
        $this->database->bind(':parent_gender', $data['parent_gender']);
        $this->database->bind(':parent_adress', $data['parent_adress']);
        $this->database->bind(':parent_job', $data['parent_job']);
        $this->database->bind(':parent_phone', $data['parent_phone']);



        if ($this->database->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function deleteparent($id)
    {

        $this->database->query("DELETE FROM `parents` WHERE `parent_id` = :parent_id");
        $this->database->bind(':parent_id', $id);

        if ($this->database->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
