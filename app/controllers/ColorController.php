<?php

class ColorController extends Controller 
{
    public function index()
    {
        $danhmuc = $this->model('Color'); 
        $data = $danhmuc->all();
        $title = "Quản lí màu sắc";
        $this->view("color/index", [
            'title' => $title,
            'colors' => $data
        ]);
    }

    public function create()
    {
        $this->view('color/add');
    }

    public function add()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = trim($_POST['name']);
            var_dump($_POST);
            var_dump($name);
           
            if (!empty($name)) {
                echo "call here";
                 
                $colorModel = $this->model('color')->create(array(
                    'name' => $name
                ));
                $this->redirect('/color');
            }
        }
        $this->redirect('/color');
    }

    public function delete($id){
        $danhmuc = $this->model('danhmuc');
        $danhmuc->delete($id);
        header('location: /danhmuc' );
    }
}