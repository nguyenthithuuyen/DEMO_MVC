<?php
require __DIR__.'/vendor/autoload.php';
use App\Controller\UserController;

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";

$controller=new UserController();

//$controller->viewAll();
switch ($page){
    case 'add' :
        $controller->addProduct();
        break;
    case 'update' :
        $controller->updateProduct();
        break;
    case 'delete' :
        $id = $_REQUEST['id'];
        $controller->deleteProduct($id);
        break;
    default :
        $controller->viewAll();
}
