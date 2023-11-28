<?php
require_once('./client/includes/header.php');
require_once('./client/includes/nave.php');

if (isset($_POST['envoyer'])) {
    // recuperation des elements de mon formulaire
    $email = $_POST['email'];
    $token = $_POST['token'];
    $username = $_POST['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pwd = $_POST['pwd'];
    $billing_address_id = $_POST['billing_address_id'];
    $shipping_address_id = $_POST['shipping_address_id'];
    $role_id = $_POST['role_id'];



    // if (empty($nom) ||empty($email)|| empty($password)) {
    //     echo 'Remplir tous les champs';
    //    }
    //    else{
    //         if ($password === $c_password) {

    //             $resultat=inscription($nom,$prenom , $email, $telephone, $date_naissance, $password ,$c_password);
    //             if($resultat){

    //             login( $email, $password);


    //          echo "Utilisateur inscrits";


    //             }
    //             else{
    //              echo "Une erreur est survenue";
    //             }



    //         }
    //     }





}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css?v=1.1">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
    <link href="public/css/sign-in.css" rel="stylesheet">
</head>

<body>

    <main class="form-signin w-100 m-auto border mt-4">

        <!-- début template listeFilms -->
        <section>
            <h3 class="text-center">Signup</h3>

            <form method="post">
                <div class="container mb-1">
                    <div class="mb-1">
                        <label for="username" class="form-label">User Name</label>
                        <input type="text" name="username" class="form-control" id="username">
                    </div>
                    <div class="mb-1">
                        <label for="fname" class="form-label">Full Name</label>
                        <input type="text" name="fname" class="form-control" id="fname">
                    </div>
                    <div class="mb-1">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" name="lname" class="form-control" id="lname">
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                    </div>

                    <div class="mb-1">
                        <label for="pwd" class="form-label">Password</label>
                        <input type="password" name="pwd" class="form-control" id="pwd">
                    </div>

                    <div class="mb-1">
                        <label for="token" class="form-label">Token</label>
                        <input type="hidden" name="csrf_token" class="form-control" id="token">
                    </div>

                </div>
                <div class="mb-1">
                    <label for="billing_address_id" class="form-label">Billing address</label>
                    <input type="Int" name="billing_address_id" class="form-control" id="billing_address_id">
                </div>
                <div class="mb-1">
                    <label for="shipping_address_id" class="form-label">Shipping address</label>
                    <input type="Int" name="shipping_address_id" class="form-control" id="shipping_address_id">
                </div>

                <div class="mb-1">
                    <label for="role_id" class="form-label">Role</label>
                    <input type="Int" name="role_id" class="form-control" id="role">
                </div>
                <br>
                <div class="d-grid gap-2">
                    <button type="submit" name="envoyer" class="btn btn-primary">Signup</button>
                </div>

                </div>
            </form>
            <div class="text-center mt-3">
                <a class="text-center" href="login.php">Login</a>
            </div>
        </section>


    </main>
</body>

</html>
<?php
require_once('./client/includes/footer.php');
?>