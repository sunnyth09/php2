<?php
class HomeController extends Controller
{
    public function index()
    {
        $product = $this->model('product'); //
        // $product = new Product();
        $data = $product->all();
        var_dump($data);
        $title = "trang chu";
        $this->view("home/index", [
            'title' => $title,
            'products' => $data
        ]);
    }
}
