<?php 
namespace App\Controller;
class Product extends Controller {
    public function listing(){
        $products = 
        $this -> render ("listing", compact($));
    }
    public function detail(){

    }
}