<?php
require_once("config/config.php");
require_once("controller/productController.php");

if(isset($_GET['action'])){
    $action = $_GET['action'];
}
else{
    //Por defecto
    $action = 'defaultProduct';
}

#Aqui puede quedar más claro usar un match/switch, en base del valor de $action recuperado
#ejecutar la función correspondiente
$productController = new ProductController();
$productController->$action();

?>