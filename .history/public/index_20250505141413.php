<?php 
require"../class/App/App.php";
\App\App::init();

$page = "home";
if (!empty($_GET['page'])){
    $page = $_GET['page'];
}
if ($page =="home"){

}elseif ($page=="listing"){
    $controller = new \App\Controller\Product();
    $controller

}
elseif ($page=="detail"){ 

}else{
    //error 404
}

?>