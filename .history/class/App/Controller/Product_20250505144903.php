<?php 
namespace App\Controller;
class Product extends Controller {
    public function listing(){
        $products = \App\M\
        $this -> render ("listing", compact($products));
    }
    public function detail(){
        $products = ...
        $this->render("detail",compact($product));

    }
}