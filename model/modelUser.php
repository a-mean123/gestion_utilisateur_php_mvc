<?php

require_once("model.php");

class ModelUser extends Model{
    private $id= NULL;
    private $name;
    private $lastname;
    private $email;
    private $poste;
    private $contact;
    private $username;
    private $password;
    private $role;
  
    private $enable;
   

    protected static $table = 'user';
    protected static $primary = 'id';
    protected static $user = 'username';
    protected static $pass = 'password';



    public function __construct($name = NULL,$lastname = NULL, $email = NULL,
    $poste = NULL,$contact = NULL,
    $username = NULL, $password = NULL , $role = NULL , $enable = NULL)
    {
        if (!is_null($name) && !is_null($lastname) && !is_null($email) && !is_null($poste) && !is_null($contact) && !is_null($username) && !is_null($password) && !is_null($role)&& !is_null($enable) ) {
           
           
            $this->name = $name;
            $this->username = $lastname;
            $this->lastname = $lastname;
            $this->email = $email;
            $this->poste = $poste;
            $this->contact = $contact;
            $this->username = $username;
            $this->password = $password;
            $this->role = $role;
            $this->enable = $enable;

          
           }
        
    }

    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getLastname(){
        return $this->lastname;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPoste(){
        return $this->poste;
    }
    public function getContact(){
        return $this->contact;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){

        return $this->password;
    }
    public function getrole(){
        return $this->role;
    }

    public function getEnable(){
        return $this->enable;
    }

 



}


?>