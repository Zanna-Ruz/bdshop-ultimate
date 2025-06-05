<?php
namespace App\Router;

class RouterAdmin extends \Core\Router\Router {
    public static function run() {
        if(empty($_GET)){
            //Page d'accueil
            require ROOT."/view/admin/home.php";
        } elseif (isset($_GET['controller']) && isset($_GET['method'])) {
            $controller = $_GET['controller'];
            $method = $_GET['method'];
      
        }
    }
}