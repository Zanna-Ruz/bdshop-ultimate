<?php 
namespace App\Controller;
class Product extends Controller {
    public function listing(){
        $products = \App\Model\Product::getAll();
        $this -> render ("listing", compact($products));
    }
    public function detail(){
        $products = \App\Model\Product::get();
        $this->render("detail",compact($product));

    }
}