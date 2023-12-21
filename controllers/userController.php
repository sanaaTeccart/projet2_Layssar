<?php
require_once('Models/User.php');
class UserController
{
 
  public function getUserById($userId)
  {
    $objUser = new User;
    //validation 
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }
    $userId = $_SESSION['auth']['user_id'];
    return $objUser->getUserById($userId);
  }



  #delete userbyID
  public function deleteUserById($id)
  {
    $objUser = new User;
    $deleted = $objUser->deleteUser($id);

    if ($deleted) {
      echo "L'utilisateur a été supprimé avec succès.";
    } else {
      echo "Échec de la suppression de l'utilisateur.";
    }
    // Vous pouvez récupérer la liste mise à jour des utilisateurs ici
    $users = $objUser->getUsers();

    global $pageData;
    $pageData = ['users' => $users];

    // Restez sur la même page
    require_once './views/admin/users.php';
  }



  #create user
  function ajouterUser($userdata)
  {
    $objUser = new User;

    //appeler la methode add avec la requet et usedata
    return $objUser->ajouterUser($userdata);
  }




  public function getAllUsers()
  {
    // Récupérer l'ID de l'utilisateur actuel 
    $id = $_SESSION['user']['id'] ?? null;

    // Instancier le modèle utilisateur
    $oUser = new User();
    return $oUser->getUsers();



  //   // Vérifier si l'utilisateur est administrateur
  //    if ($validationController->validateUserRole($id)) {
  //      // Récupérer la liste des utilisateurs
  //      $pageData['users'] = $user->getUsers();

  //      // Passer la liste des utilisateurs à la vue
  //      include_once './views/usersList.php'; // Vous devez créer la vue correspondante
  //  } else {
  //      // Rediriger ou afficher un message d'erreur si l'utilisateur n'a pas les autorisations nécessaires
  //      echo 'Vous n\'avez pas les autorisations nécessaires pour afficher la liste des utilisateurs.';
  //  } 
  }
}
