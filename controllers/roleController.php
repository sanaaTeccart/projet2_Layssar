<?php
require_once('Models/user.php');
class UserRole{

    
    
    #get role by Id
    
    public function getRoleById($id)
    {
        $objProduct = new Role;
    return $objProduct->getRoleById($id);
    }
}