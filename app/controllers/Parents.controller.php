<?php

class Parents extends Controller
{


    public function __construct()
    {
        $this->parentModel = $this->model('parent_');
        $this->adminModel = $this->model('admin');
    }


    public function show()
    {
        $data = $this->parentModel->getparents();

        $this->view('Parents/ShowParents', $data);
    }



    public function add()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [
                'parent_fname' => $_POST['parent_fname'],
                'parent_lname' => $_POST['parent_lname'],
                'parent_gender' => $_POST['parent_gender'],
                'parent_job' => $_POST['parent_job'],
                'parent_adress' => $_POST['parent_adress'],
                'parent_phone' => $_POST['parent_phone']
            ];
            if ($this->parentModel->addparent($data)) {
                redirect('parents/show');
            } else {
                $infos = [
                    'error'  => 'cannot add parent'
                ];
                $this->view('parents/Addparent', $infos);
            }
        } else {
            
            $this->view('parents/Addparent');
        }
    }
    public function update($id)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [
                'parent_id' => $id,
                'parent_fname' => $_POST['parent_fname'],
                'parent_lname' => $_POST['parent_lname'],
                'parent_gender' => $_POST['parent_gender'],
                'parent_job' => $_POST['parent_job'],
                'parent_adress' => $_POST['parent_adress'],
                'parent_phone' => $_POST['parent_phone']
            ];
            if ($this->parentModel->updateparent($data)) {
                redirect('parents/show');
            } else {
                // Some thing gone wrong
                die('RIP');
            }
        } else {



            if ($result = $this->parentModel->getparentById($id)) {
                $this->view('Parents/UpdateParent', $result);
            } else {
                die('lol');
            }
        }
    }

    public function delete($id)
    {

        if ($this->parentModel->delete($id)) {
            redirect('parents/show');
        } else {
            die('NO DELETE');
        }
    }
}
