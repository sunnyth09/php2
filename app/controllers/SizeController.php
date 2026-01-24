<?php

Class SizeController extends Controller
{
    public function index() {
        $size = $this->model ('size');
        $data = $size->all();
        $title = "Quản lý Size";
        $this->view("sizes/index", [
            'title' => $title,
            'size' => $data
        ]);
    }

    public function delete($id) {
        $size = $this->model('size');
        $size->delete($id);
        header('location: sizes/index');
    }
}

?>