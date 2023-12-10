<?php

//  require_once("./utils/Crud.php");

class Role extends Crud
{
    public $name;
    public $description;
    public $table = 'role';

    public function getRoleByName($name)
    {
        // Utilisez une requête SQL pour récupérer le rôle par son nom
        $query = "SELECT * FROM $this->table WHERE name = :name";
        $params = [':name' => $name];
    
        // Utilisez la méthode queryWithParams pour exécuter la requête
        $roleData = $this->queryWithParams($query, $params);
    
        // Vérifiez si des données ont été trouvées
        if ($roleData) {
            // Créez une nouvelle instance de Role avec les données récupérées
            $role = new Role();
            $role->loadData($roleData); 
    
            return $role;
        } else {
            return null; // Aucun rôle trouvé avec le nom donné
        }
    }
    

    public function getRoleById($id)
    {
        // Vérifier si l'ID est null avant d'appeler getById
        if ($id !== null) {
            return $this->getById($this->table, $id);
        } else {
            
            return null; 
        }
    }
}
?>
