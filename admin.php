<?php

class Admin extends User {

    public $db;

    public function setDI(Database $db){
        $this->db = $db;
    }

    public function checkPermission(){

        echo "<br> Admin username : " . $this->getUserName();

        if( $this->getPermisson() === $this->db->fetchPermisson( $this->getUserName() )   ){
            echo "<br> You are an admin";
        } else {
            echo "<br> sorry you aren't admin";
        }
    } 
}