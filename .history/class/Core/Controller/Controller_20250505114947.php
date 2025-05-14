<?php
namespace Core\Controller;
class Controller{
    public $viewPath;

    public function render(){
        require $this->viewPath . $view . ".php";
    }

}