<?php

// -------------- 15 

/*
require_once "user.php";

$userObj = new User;

$userObj->setUserName("Ahmed Abdel-Fattah");
echo $userObj->getUserName() . "<br>";

$userObj->setPermission([
    'admin' => 1,
    'user'  => 2,
    'child' => 3
]);

echo $userObj->getPermisson();
*/

// -------------- 16

/*require_once "database.php";

$con = new Database;
$con->connect();

echo "<pre>";
print_r( $con->fetchPermisson('Ali') );
echo "</pre>";*/


// -------------- 17
/*
require_once "database.php";
require_once "user.php";
require_once "admin.php";
require_once "moderator.php";

$db = new Database;
$admin = new Admin;
$moderator = new Moderator;
// $user = new User;

$db->connect();

$admin->setPermission([
    'admin' => 1
]);

$moderator->setPermission([
    'moderator' => 2
]);

$admin->setDI($db);
$moderator->setDI($db);

$admin->setUserName("Ahmed");
$moderator->setUserName("Ali");


echo "<br> Admin" . $admin->getPermisson();
echo "<br> Moderator" . $moderator->getPermisson();

$admin->checkPermission();
$moderator->checkPermission();*/

// -------------- 18
// in this video I will reduce the code of admin and moderator and compine them in the user class
/*
require_once "database.php";
require_once "user.php";

$db = new Database;
$user = new User;

$db->connect();

$user->setDI($db);

$user->setPermission([
    'admin'     => 1,
    'moderator' => 2
]);
    
$user->setUserName("Ahmed"); 
$user->checkPermission();
*/

// -------------- 19 
// interface class

/*
interface User {

    const USER = "Ahmed";
    public function getUsername(); 
}

class admin implements User{
    public function getUsername(){
        return self::USER;
    } 
}

$Admin = new admin;
echo $Admin->getUsername();*/

// -------------- 20
// object interation & method chaining 

// object interation
/*class user {
    private $name    = "Ahmed";
    protected $age   = 20;
    public $job      = "php developer";

    public function getData(){
        foreach($this as $key => $value){
            echo "The key data is " . $key . " and it value is " . $value . "<br>";
        }
    }
}

$admin = new user;
$admin->getData(); */

// method chaining 
/*
class user {

    public $name = "Ahmed";

    public function mainFun(){
        return $this;
    }

    public function sayHello(){
        echo "Hello " . $this->name;
    }

}

$user = new user;
// var_dump($user->mainFun());
echo $user->mainFun()->sayHello();*/

// -------------- 21
// special functions on for the class

// -------------- 22

/*class User {
    public function __construct() {
        echo "Yes an obj is created from this class";
    }
}   

$user = new User;*/

/*class Database {
    public function __construct(){
        echo "The database is connected";
    }
}

class user {
    public $db;

    public function __construct(Database $db){  
        $this->db = $db;
    }
}

$db = new Database;
$user = new user($db);*/

// -------------- 23
// destruct

/*class User {

    public static $pdo;

    public function __construct(){

        if( self::$pdo === null ){
            self::$pdo = new PDO("mysql:host=localhost;dbname=auth_oop" , "root" , '');
            echo "connect <br>";
        } 
        return self::$pdo;
    }

    public function selectData( string $username ){
        $stmt = self::$pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->execute([
            ":username" => $username
        ]);

        return( $stmt->rowCount() ) ? $stmt->fetchAll(PDO::FETCH_ASSOC) : "No Data Found";
    }

    public function __destruct(){
        self::$pdo = null;
        echo "disconnect";
    }

}

$user = new User;

echo "<pre>" . print_r($user->selectData("Ahmed") , true) . "</pre>";*/

// -------------- 24
// set && get magic function

/*class session {

    public function __construct(){
        session_start();
        echo "session Start";
    }

    public function __set($key , $value){
        $_SESSION[$key] = $value;
    }

    public function __get($key){
        if(array_key_exists($key , $_SESSION)){
            return $_SESSION[$key];
        } else {
            echo "<br>Sorry This key [ " . $key . " ] is not found in the session";
        }
    }

}

$session = new session;
// $session->name = " Ahmed";
echo $session->age;*/

// -------------- 25

/*class collection {

    private $container = [];

    public function __construct(iterable $container){
        $this->container = $container;
    }

    public function __set($key , $value){
        $this->container[$key] = $value;
    }

    public function __get($key){
        return(array_key_exists($key , $this->container)) ? $this->container[$key] : false;
    }

    public function dumpObjects(){
        echo "<pre>" . print_r($this->container , true) . "</pre>";
    }

    public function count(){
        return count($this->container);
    }

    public function __isset($key){
        return(array_key_exists($key , $this->container)) ? true : false;
    }

    public function __unset($key){
        if( $this->$key ){
            unset($this->container[$key]);
            echo "Yes";
            // echo "Ahmed + " . $key;
        }
        
        return false;
    }

}

$collection = new collection([
    'db' => [
        'host'   => 'localhost',
        'dbname' => 'oopTest',
        'user'   => 'root'
    ],

    'permission' => [
        'admin'     => 1,
        'moderator' => 2,
        'user'      => 3
    ],

    'SSA' => [
        'name'      => 'Ahmed',
        'faculty'   => 'BFCAI',
        'job'       =>  'PHP web developer'
    ]
]);

// $collection->dumpObjects();
// $collection->dumpObjects($collection->db);
// echo $collection->count();

// $collection->dumpObjects($collection->db);

// print_r($collection->permission);
unset($collection->permission);

$collection->dumpObjects();*/

// -------------- 26
// Error

// -------------- 27

/*
class User implements serializable {
    protected $data;
    protected $pdo;

    public function connect(){
        $this->pdo = new PDO("mysql:host=localhost;dbname=irapp" , "root" , "");    
    }

    public function setData($data){
        $this->data = $data;
    }

    public function getData(){
        return $this->data;
    }

    public function serialize(){
        return serialize($this->data);
    }

    public function unserialize($data){
        $this->data = $data;
    }

}

$user = new User;
$user->setData([
    'name'      => 'Ahmed',
    'age'       => 21,
    'job'       => 'php developer'
]);

$user->connect();

$userSer = serialize($user);
$userUnSer = unserialize($userSer);

// echo $userSer . "<br>";
print_r($userUnSer);

echo "<pre>" . print_r($userUnSer , true) . "</pre>";


// echo "<pre>" . print_r($user->getData() , true) . "</pre>";
*/

// -------------- 28

/*trait hashName {
    public function getFirstName($firstName){
        echo "Hello " . $firstName;
    }
}

trait Rules {
    public function getLastName($lastName){
        echo $lastName;
    }
}

class collectionData {
    use hashName , Rules;
} 

$user = new collectionData();
$user->getFirstName('Ahmed'); 
echo " ";
$user->getLastName("Abdel-Fattah");*/

// -------------- 29 
// namespace

/*require_once "user.php";

use App\User as user;
// use function App\getName;

$user = new user;

echo $user::name . "<br>";
echo $user->getName();*/

// -------------- 30

/*$anon = new class {
    public function getName($name){
        return "The name is " . $name;
    }
};

echo $anon->getName('Ahmed');*/

/*
class User {
    public $password = '123456789';
    public function register() {
        return new class extends User {
            public function hashedPass(){
                $hashed = password_hash($this->password , PASSWORD_DEFAULT , ['cost => 12']);
                return $hashed;
            }
        };
    }
}
$user = new User;

echo $user->password . "</br>";
echo $user->register()->hashedPass();*/

// -------------- 31
// autoload 
/**
 * 1-   __autoload 
 * 2-   spl_autolod
 * 3-   classmap
 * 4-   psr-4
 */


/*spl_autoload_register(function ($class){
    echo $class . "</br>";
    require_once $class . ".php";
});

$user = new User;
echo $user->getData();*/

// autoload with the composer   ######

require_once "vendor/autoload.php";

$user = new User;

