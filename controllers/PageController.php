<?php
require_once 'ProductController.php';
require_once 'userController.php';

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
        $pageData = [
            'users' => $users,
        ];
        // boucle a travers mon tableau de user
        // fait moi une liste avec mes produits



        require_once './views/admin/users.php';
    }


    public function user()
    {

        //Va me chercher mes users 
        $objUserController = new UserController;
        $userDel = $objUserController->DeleteUserById();
        global $pageData;
        $pageData = ['user' =>  $userDel];
    }


    public function signup()
    {


        if (isset($_POST['envoyer'])) {
            // recuperation des elements de mon formulaire
            //valider les donnees recues
            // $fieldVrevalid=true;
            // $userValidationData= ValidationController signup
            // $fieldVrevalid= $userValidationData['isvalid']



            $email = $_POST['email'];

            $username = $_POST['username'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $pwd = $_POST['pwd'];




            // if (empty($nom) ||empty($email)|| empty($pwd)) {
            //     echo 'Remplir tous les champs';
            //    }
            //    else{
            //         if ($pwd === $c_password) {

            //             $resultat=singup($nom,$prenom , $email, $telephone, $date_naissance, $password ,$c_password);
            //             if($resultat){

            //             login( $email, $pwd);


            //          echo "Utilisateur inscrits";


            //             }
            //             else{
            //              echo "Une erreur est survenue";
            //             }



            //         }
            //     }






            //si la validat8on fonctionne
            $objUserController = new UserController;
            $userParams =
                [
                    'email' => $email,
                'username' => $username,
                    'fname' => $fname,
                    'lname' => $lname,
                    'pwd' => $pwd,
                ];

            $objUserController->ajouterUser($userParams);




            require_once './views/pages/login.php';
        } else {


            require_once './views/pages/signup.php';
        }
    }



    public function login()
    {
        require_once './views/pages/login.php';
    }
}
