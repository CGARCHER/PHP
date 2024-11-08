<?php
require_once("repository/productRepository.php");
class ProductController
{

    function listProduct()
    {
        //llamar a bbdd
        $product = (new ProductRepository())->getAllProducts();

        //llamar a la vista
        include_once("view/productHeader.php");
        include_once("view/productList.php");
        include_once("view/productFooter.php");
    }

    function defaultProduct()
    {
        include_once("view/productHeader.php");
        include_once("view/productFooter.php");
    }

    //Cargo el formulario
    function addProduct()
    {
        //llamar a la vista
        include_once("view/productHeader.php");
        include_once("view/productAdd.php");
        include_once("view/productFooter.php");
    }

    //Inserto en BBDD y hago la operaciones en BBDD
    function insertProduct()
    {
        $product = (new Product())->setName($_POST['name'])->setShort_name($_POST['shortName'])
            ->setPvp($_POST['pvp']);

        $result = (new ProductRepository())->addProduct($product);
        
        $message = '';
        if($result){
            $message = 'Insertado correctamente';
        }
        else{
            $message = 'Error al guardar';
        }

      //llamar a la vista
      include_once("view/productHeader.php");
      include_once("view/productAdd.php");
      include_once("view/productFooter.php");    }
}
