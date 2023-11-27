
<?php
require_once('./utils/Crud.php');

class User extends Crud  {
    
        public $id;
        public $token;
        public $username;
        public $fname;
        public $lname;
        public $pwd;
        public $billing_address_id;
        public $shipping_address_id;
        public $role_id;
        public $email;
        public $table = 'user';
    
        public function getUsers()
        {
           
            return $this->getAll($this->table);
        }

        
    
        public function getUserById($id)
        {
    
            return $this->getById($this->table, $id);
        }
    
    // public function getByemail($email) {
    
        // return $this->getByOneColumn($this->table, $email);
    // }
    
        public function ajouterUser($userdata)
        {
            //validation
            /* 
            if Product data 
            */
           
            $request = "INSERT INTO $this->table (email, token, username, fname, lname, pwd, billing_adress_id, shipping_address_id, role_id) VALUES (:email, :token, :username, :fname, :lname, :pwd, :billing_adress_id, :shipping_address_id, :role_id)";
            return parent::add($request, $userdata);
        }
    
        // public function updateUser($userdata)
        // {
            //modifier par exp:email
            //$this->email= $userdata['email'];
            /* $userdata = [
                'id' => $this->id 
                'email' => $this->email,
                'token' => $this->token,
                'username' => $this->username,
                'fname' => $this->fname,
                'lname' =>$this->lname,
                'pwd' =>this->pwd,
                'billing_address_id' =>$this->billing_address_id
                'shipping_address_id' =>$this->shipping_address_id
                'role_id' =>$this->$role_id 
            ]; */

        //     var_dump($userdata);
        //     echo'</br></br>';
        //     $request = "UPDATE user SET email = :email,username = :username, fname = :fname, lname = :lname,pwd= :pwd, billing_address_id =: billing_address_id, shipping_address_id=: shipping_address_id,role_id=:role_id WHERE id = :id";
        //     parent::updateById($request, $userdata);
        // };
    
        public function deleteUser($id)
        {
            return parent::delete('user',$id);
        }
    }
    

    

?>

