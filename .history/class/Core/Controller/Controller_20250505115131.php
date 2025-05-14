<?php
namespace Core\Controller;
class Controller{
    public $viewPath;

    public function render($view, $vari){
        require $this->viewPath . $view . ".php";
    }

}