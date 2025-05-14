<?php
namespace Core\Controller;
class Controller{
    public $viewPath;

    public function render($view, $variq){
        require $this->viewPath . $view . ".php";
    }

}