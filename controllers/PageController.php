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
            $userDel = $objUserController->DeleteUserById();
            global $pageData;
            $pageData= [
                'users' => $users,
                'user'=>  $userDel
            ];
            // boucle a travers mon tableau de user
            // fait moi une liste avec mes produits
     
       

        require_once './views/admin/users.php';
    }


    public function signup()
    {
        $objUserController = new UserController;
        $userdata =
         [
            //'email','token', 'username', 'fname', 'lname', 'pwd','billing_address_id', 'shipping_address_id', 'role_id'];
            'email' => $userdata['email'],
            'token' => $userdata['token'], // You might want to generate a token
            'username' => $userdata['username'],
            'fname' => $userdata['fname'],
            'lname' => $userdata['lname'],
            'pwd' => $userdata['pwd'], // Store the hashed password
            'billing_adress_id' => $userdata['billing_address_id'],
            'shipping_address_id' => $userdata['shipping_address_id'],
            'role_id' => $userdata['role_id']
        ];

        $objUserController->ajouterUser( $userdata);
     

        

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
