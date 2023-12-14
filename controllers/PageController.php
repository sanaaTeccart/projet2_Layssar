<?php
require_once 'ProductController.php';
require_once 'userController.php';
require_once 'ProfileController.php';
require_once 'AddressController.php';
require_once 'ValidationController.php';
require_once './utils/Util.php';

class PageController
{
    //recuperer les donnees
    public function products()
    {
        //Va me chercher mes produits 
        $objProductController = new ProductController;

        $products = $objProductController->getAllProducts();

        global $pageData;

        $pageData = [
            'products' => $products
        ];
        require('./views/pages/products.php');
    }

    public function product($productId)
    {


        $objProductController = new ProductController;
        $product = $objProductController->getProductById($productId);

        global $pageData;
        $pageData = [
            'product' => $product
        ];
        require('./views/pages/product.php');
    }



    public function cart()
    {
        echo '<h1>Page cart</h1>';
    }



    public function users()
    {

        //Va me chercher mes users 
        $objUserController = new UserController;


        $users = $objUserController->getAllUsers();
        global $pageData;
        $pageData = [
            'users' => $users,
        ];
        // boucle a travers mon tableau de user

  //header("Location: users");
        require_once './views/admin/users.php';
    }


    public function deleteUserById($id)
    {
        // //Va me chercher mes users 
        $obUserController = new UserController;
        $userDel = $obUserController->deleteUserById($id);
        global $pageData;
        $pageData = ['user' =>  $userDel];

        header("Location: users");
    }



    public function signup()
    {
        if (isset($_POST['envoyer'])) {
            // Récupération des éléments du formulaire
            $email = $_POST['email'];
            $username = $_POST['username'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $pwd = $_POST['pwd'];


            // Création d'un tableau avec les données de l'utilisateur
            $userData = [
                'email' => $email,
                'username' => $username,
                'fname' => $fname,
                'lname' => $lname,
                'pwd' => $pwd,
            ];

            // Validation des données avec ValidationController
            $validationController = new ValidationController;
            $validationResult = $validationController->signup($userData);

            if ($validationResult['isValid']) {
                //hash pwd 
                $encodedPwd = Util::encodeString($userData['pwd']);
                $userData['pwd'] = $encodedPwd;
                // Les données sont valides, procéder à l'inscription
                $objUserController = new UserController;
                $objUserController->ajouterUser($userData);

                // Rediriger vers la page de connexion
                header("Location: login");
            } else {
                // Les données ne sont pas valides, afficher les messages d'erreur
                $errorMessages = $validationResult['messages'];

                // Rediriger vers la page d'inscription avec les messages d'erreur
                require_once './views/pages/signup.php';
            }
        } else {

            // Le formulaire n'a pas été soumis, afficher la page d'inscription
            require_once('./views/pages/signup.php');
        }
    }
    public function login()
    {

        if (isset($_POST['connexion'])) {
            // Récupération des éléments du formulaire
            $username = $_POST['username'];
            $pwd = $_POST['pwd'];

            // Création d'un tableau avec les données de l'utilisateur
            $userData = [
                'username' => $username,
                'pwd' => $pwd,
            ];

            // Validation des données avec ValidationController

            $validationController = new ValidationController;
            $validationResult = $validationController->login($userData);

            if ($validationResult['isValid']) {
                // Générer un token
                $token = Util::generateToken();
                session_start();
                $_SESSION['auth'] = [
                    'token' => $token,
                    'user_id' => $validationResult['user']['id'],
                    'role_id' => $validationResult['user']['role_id']
                ];


                // update DB user token

                $objuser = new User();
                $objuser->updateToken($validationResult['user']['id'], $token);

                /* 

                $oUser = new User;
                $userData = $oUser->getUserByUsername($userData['username']); */




                if ($_SESSION['auth']['role_id'] != 3) {
                    header("Location: users");
                } else {
                    header("Location: products");
                    //require_once './views/pages/products.php';
                }
            } else {

                global $pageData;
                $pageData = [
                    'errorMessage' => $validationResult['message']
                ];
                // Les données ne sont pas valides, afficher le message d'erreur
                //$errorMessage = $validationResult['message'];

                // Rediriger vers la page de signup avec le message d'erreur
                require_once './views/pages/login.php';
            }
        } else {
            // Le formulaire n'a pas été soumis, afficher la page de connexion
            require_once './views/pages/login.php';
        }
    }








    public function profile($id)
    {
        if (isset($_POST['envoyer'])) {
            $userData = [
                'email' => $_POST['email'] ?? '',
                'username' => $_POST['username'] ?? '',
                'fname' => $_POST['fname'] ?? '',
                'lname' => $_POST['lname'] ?? '',
                'pwd' => $_POST['pwd'] ?? '',

            ];

            global $userData;
            $oProfile = new ProfileController;
            $oProfile->updateProfile($userData);
        } else {


            $oProfile = new ProfileController;
            $profile = $oProfile->getProfileById($id);

            $oAddress = new AddressController;
            $billing_address = $oAddress->getaddressById($profile['billing_address']);
            $shipping_address = $oAddress->getaddressById($profile['shipping_address']);

            global $viewData;
            $viewData = [
                'profile' => $profile,
                'billing_address' => $billing_address,
                'shipping_address' => $shipping_address,

            ];
            require('./views/pages/profile.php');
        }




        $oProfile->displayProfile($id);
    }
}
