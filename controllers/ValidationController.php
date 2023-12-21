<?php


class ValidationController
{

    public function signup(array $userData)



    { // Validation du nom d'utilisateur
        $isValidUsername = strlen($userData['username']) >= 3;
        $msgUsername = $isValidUsername ? '' : 'Le nom d\'utilisateur doit contenir au moins 3 caractères';

        // Validation de l'e-mail
        $isValidEmail = filter_var($userData['email'], FILTER_VALIDATE_EMAIL);
        $msgEmail = $isValidEmail ? '' : 'E-mail invalide. Veuillez entrer une adresse e-mail valide.';

        // Validation du mot de passe
        $isValidPassword = strlen($userData['pwd']) >= 8;
        $msgPassword = $isValidPassword ? '' : 'Mot de passe invalide. Il doit contenir au moins 8 caractères.';

        return [
            'isValid' => $isValidUsername && $isValidEmail && $isValidPassword,
            'messages' => [
                'username' => $msgUsername,
                'email' => $msgEmail,
                'password' => $msgPassword,
            ],
        ];
    }


    public function login(array $userDataParam): array
    {
        // Initialiser le message d'erreur générique
        $errorMessage = 'Username ou password invalides. Veuillez réessayer.';

        // Validation du nom d'utilisateur et du mot de passe
        if (empty($userDataParam['username']) || empty($userDataParam['pwd'])) {
            // Si l'un des champs est vide, retourner le message générique
            return [
                'isValid' => false,
                'message' => $errorMessage,
            ];
        }

        // Vos autres validations ici...
        
        $oUser = new User; 
        $userData = $oUser->getUserByUsername($userDataParam['username']);



        $encodedPwd = Util::encodeString($userDataParam['pwd']);
        //var_dump($encodedPwd);

        if ($encodedPwd == $userData[0]['pwd']) {
            // Si toutes les validations passent, retourner isValid à true
            return [
                'isValid' => true,
                'message' => '',
                'user' => $userData[0]
            ];
        } else {
            return [
                'isValid' => false,
                'message' => $errorMessage,
            ];
        }
    }









    public function validateUserRole($userId)
    {
        // Assumez que vous avez une colonne 'role_id' dans votre table d'utilisateurs
        $userModel = new User();
        $id = $userModel->getUserRole($userId);

        // Vérifier si l'ID du rôle est défini
        if ($id !== null) {
            // Instancier la classe Role
            $role = new Role();

            // Récupérer le rôle par son ID
            $roleData = $role->getRoleById($id);
           // var_dump($roleData);

            // Vérifier si le rôle est administrateur
            return $roleData !== null && $roleData['id'] === 1 && $$roleData['id']===2;
        } else {

            return false;
        }
    }
}
