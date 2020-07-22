<?php

// -------------- 15 
// -------------- 18
/*
class User {
    public $username,
           $db,
           $permisson = [];
           
    public function setDI(Database $db){
        $this->db = $db;
    }

    public function setUserName(string $username){
        $this->username = $username;
    }

    public function getUserName(){
        return (string) $this->username;
    }

    public function setPermission(array $permisson){
        $this->permisson = $permisson;
    }

    public function getPermission(){
        $permission = implode(',' , $this->permisson );
        $explodedPermission = explode("," , $permission);
        return $explodedPermission;
    }

    public function checkPermission(){

        if( $this->getPermission()[0] === $this->db->fetchPermission( $this->getUserName() ?? null ) ){
            echo "You are admin";
        } else if( $this->getPermission()[1] === $this->db->fetchPermission( $this->getUserName() ?? null) ){
            echo "You are moderator";
        } else {
            echo "Sorry you don't have any permission";
        }

    }
}*/

// -------------- 29
// namespace app

/*namespace App;

class User {
    const name = "Ahmed";

    public function getName(){
        return self::name . " Abdel-Fattah Abdel-Fattah";
    }   
}*/


// -------------- 31

class User {
    protected $data = 52;
    function getData(){
        return $this->data;
    }
}