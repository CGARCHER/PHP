<?php

require_once("config/configDB.php");
require_once("model/product.php");

class ProductRepository{

    private function getPDO(){
        return (new configDB())->getInstance();
    }

    public function getAllProducts(){
        $query = $this->getPDO()->prepare("SELECT * FROM PRODUCTS");
        $query->execute();
        
        $product = [];
        while($p = $query->fetch(PDO::FETCH_ASSOC)){
            $product[] = new Product($p['cod'], 
            $p['short_name'], $p['pvp'], $p['nombre']);
        }
        
        return $product;
    } 

    public function addProduct($product){
        $query = $this->getPDO()->prepare("INSERT INTO PRODUCTS(SHORT_NAME, PVP, NOMBRE) VALUES (?,?,?)");
        $query->bindValue(1, $product->getShort_name());
        $query->bindValue(2, $product->getPvp());
        $query->bindValue(3, $product->getName());
        return $query->execute();
    }
}
?>