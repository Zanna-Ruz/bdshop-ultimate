<?php
namespace Core\Controller;
class Controller{
    public $viewPath;

    public function render($view, $variable=[]){
        
        require $this->viewPath . $view . ".php";
    }

}