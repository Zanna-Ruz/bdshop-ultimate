<?php 
require"../class/App/App.php";
\App\App::init();
\App\Router\Router::run();

$page = "home";
if (!empty($_GET['page'])){
    $page = $_GET['page'];
}
if ($page =="home"){

}elseif ($page=="listing"){
    $controller = new \App\Controller\Product();
    $controller->listing();

}
elseif ($page=="detail" && !empty ($_GET['id'])){ 
    $controller = new \App\Controller\Product();
    $controller->detail($_GET['id']);

}else{
    //error 404
}

?>
