<?php

require_once('Models/User.php');

class ProfileController
{
    public function displayProfile()
{
    // Afficher la page de profil avec les informations de l'utilisateur
    require_once './views/pages/profile.php';
}


public function updateProfile($userData)
    {
        try {
            // Les données sont valides, procéder à la modification du profil
            $objuser = new User;
            
            // Construire la requête SQL pour la mise à jour du profil
            $request = "UPDATE user SET email = :email, username = :username, fname = :fname, lname = :lname, pwd = :pwd WHERE id = :id";

            // Ajouter l'id de l'utilisateur à $userData
            $userData['id'] = $_SESSION['user']['id'];

            // Appeler la méthode updateById avec la requête et $userData
            $objuser->updateById($request, $userData);

            // Rediriger ou afficher la page de profil avec un message de succès
            $this->displayProfile();
        } catch (Exception $e) {
            // Afficher l'erreur en cas de problème
            echo 'Erreur lors de la mise à jour du profil : ' . $e->getMessage();
        }
    }

}