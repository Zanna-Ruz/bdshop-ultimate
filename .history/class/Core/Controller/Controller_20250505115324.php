<?php
namespace Core\Controller;
class Controller{
    public $viewPath;

    public function render($view, $variable=[]){
        extract ($varia)
        require $this->viewPath . $view . ".php";
    }

}