<?php


class admin
{


    public function __construct()
    {
        $this->database = new Database;
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
}
