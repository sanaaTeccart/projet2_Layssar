<?php
require_once 'ProductController.php';
require_once 'userController.php';

class PageController
{

    public function products()
    {
        //Va me chercher mes produits 
        $objProductController = new ProductController;

        $products = $objProductController->getAllProducts();

        global $pageData;
        $pageData= [
            'products' => $products
        ];
        // boucle a travers mon tableau de produits
        // fait moi un liste avec mes produits
        require('./views/pages/products.php');
    }

    public function cart()
    {
        echo '<h1>Page cart</h1>';
    }


    public function acceuil()
    {
       // require_once './views/pages/acceuil.php';
    }

    
    public function users()
    {

            //Va me chercher mes users 
            $objUserController = new UserController;
    
            $users = $objUserController->getAllUsers();
    
            global $pageData;
            $pageData= [
                'users' => $users
            ];
            // boucle a travers mon tableau de user
            // fait moi une liste avec mes produits
     
       

        require_once './views/admin/users.php';
    }


    public function signup()
    {
        // $viewData = ['getdata'];
         session_start();
        // $_SESSION['viewData'] = $viewData;

        require_once './views/pages/signup.php';

       
    }


    public function login()
    {
        require_once './views/pages/login.php';
    }



    public function results()
    {
        require_once './utils/results.php';
    }
}
