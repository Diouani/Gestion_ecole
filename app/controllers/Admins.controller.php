<?php


class Admins extends Controller
{



    public function __construct()
    {
        
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
}
