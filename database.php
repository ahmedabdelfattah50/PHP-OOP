<?php

class Database{
    public $pdo;

    const CREDENTIALS = [
        'host'    => "localhost",
        'db'      => "auth_oop",
        "user"    => "root",
        "pass"    => ""
    ];

    public function connect(){
        if( $this->pdo === null ){
            $this->pdo = new PDO("mysql:host=" . self::CREDENTIALS['host'] . 
                                 ";dbname=" . self::CREDENTIALS['db'] , 
                                 self::CREDENTIALS['user'] , self::CREDENTIALS['pass']);
            // echo "connected";
        } 
        return $this->pdo;
    }

    public function fetchPermission(string $username){
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->execute([
            'username' => $username
        ]);

        if($stmt->rowCount()){
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            return $data['permission'];
        } else {
            echo "Sorry No data found";
        }
    }

}