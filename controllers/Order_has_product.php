<?php
require_once('Models/Product.php');
class order_has_productController
{


    #get all commandes
    public function getAllCommandes()
    {
        $objProduct = new Product;
        return $objProduct->getProducts();
    }

    #get product by Id
    
    public function getCommandeById($id)
    {
        $objProduct = new Product;
    return $objProduct->getProductById($id);
    }

    
}
