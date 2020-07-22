<?php
// ----------- 2

/*class User {
    Public function myName(){
        echo "Ahmed Abdel-Fattah";
    }
} 

$user = new User;

var_dump($user);*/

// ----------- 3

/*class user {

    // var $name = "Ahmed";
    const NAME = "Ahmed";
}

$user1 = new user;
var_dump($user1);*/

// ----------- 4

/*class user {
    var $name = "Ahmed";
    function getName(){
        echo "Hello " . $this->name;
    }
}

$user1 = new user;
$user1->getName();*/

// ----------- 5
// access modifier
/**
 * public
 * private
 * protected
 */

/*class user {
    private $name = "Ahmed";

    public function getName(){
        echo "Hello " . $this->name; 
    }

    public const NAME = "Ahmed Abdel-Fattah";
}

$user = new user;

// echo ($user->getName());     // for public method    
// echo ($user::NAME);          // this for const

echo ($user->$name);    */

// ----------- 6
// this

// ----------- 7
// small example for login user

/*class user{
    private $username,
            $password;
    
    public $age,
           $job;
    
    public function setPrivateData($username , $password){
        $this->username = $username;
        $this->password = $password;
    }

    public function setDataInfo($age , $job){
        $this->age = $age;
        $this->job = $job;
    }

    public function checkLogin($username, $password){        
        if( ($this->username === $username) && ($this->password === $password) ){
            echo "Yes You are Welcomed to this page, Your age is " . $this->age . " and your job is " . $this->job;
        } else {
            echo "Sorry You are not allowed to enter this page";
        }
    }
}

$userObj = new user;
$userObj->setPrivateData("Ahmed" , "123456789");
$userObj->setDataInfo(21 , "PHP developer");
$userObj->checkLogin("Ahmed" , "123456789");*/

// ----------- 8

/*class user {

    // public $name = "Ahmed";    
    // public const NAME = "ahmed";

    public static $name = "Ahmed";    
    public const NAME = "ahmed";
}

$user = new user;
// echo ($user->name) . "<br>";
// echo ($user::NAME);

echo ($user::$name) . "<br>";       // by the object

echo (user::$name) . "<br>";       // by the class name
echo ($user::NAME);                // constant 
*/

// ----------- 9

/*class User {

}

$user = new User;

// var_dump($user);

// --------- instanceof 
// echo(($user instanceof User));
// var_dump(($user instanceof User));

// --------- is_a 
// echo (is_a($user , 'User'));
// var_dump(is_a($user , 'User'));*/

// ----------- 10

// self operator

/*class User {
    public static function sum() {
        return 5-2;
    }

    public static function getSum() {
        // return User::sum();      // the old method without self operator
        return self::sum();         // the new method by self operator
    }
}

echo User::getSum();*/

// ----------- 11 
// comparison between (this & self) operators

// ----------- 12

/*class phone {
    public $properites = [];

    public function setPro($propre = []){
        $this->$properites = $propre;
    }

    public function getPro(){
        echo "<pre>" . print_r($this->properites , true) . "</pre>";
    }
}

class huawie extends phone {

}

$huawie = new huawie;
$huawie->properites = [
    "name"     => "huawie s4",
    "camera"   => "45mpx"
];   

$huawie->getPro();*/

// ----------- 13

/*final class Database {
    // public $pdo;

    public function connect() {
        $pdo = new PDO();
    }

    public function insert() {
        echo "Hello for insertion";
    }
}

class User {
    public $db;

    public function setDI(Database $db){
        $this->db = $db;
    }
}

$user = new User;
$db = new Database;
$user->setDI($db);      // this is very important to run the following method in the final class
$user->db->insert();*/

// ----------- 14

/*abstract class databaseBlueprint {
    abstract public function connect();
}

class _PDO extends databaseBlueprint {
    public $pdo;

    public function connect(){
        if($this->pdo === null){
            $this->pdo = new PDO("mysql:host=localhost;dbname=irapp" , 'root' , '');
            echo "connected <br>";
        }    
        return $this->pdo;
    }
}

// class _MySqLi extends databaseBlueprint {
//     public function connect(){
//         $connection = mysqli_connect();
//     }
// }

$pdo = new _PDO;
$pdo->connect();
$pdo->connect();
$pdo->connect();
$pdo->connect();*/

// ----------- 15
