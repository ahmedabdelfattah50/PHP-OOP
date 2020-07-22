<?php

class Moderator extends User {

    public $db;

    public function setDI(Database $db){
        $this->db = $db;
    }

    public function checkPermission(){

        echo "<br> Moderator username : " . $this->getUserName();

        if( $this->getPermisson() === $this->db->fetchPermisson( $this->getUserName() )   ){
            echo "<br> You are an moderator";
        } else {
            echo "<br> sorry you aren't moderator";
        }
    } 
}