<?php

// phpinfo();
require './functions.php';
require 'Database.php';
require 'Response.php';
require './router.php';







// $id = $_GET['id'];
// $query = "select * from posts where id = :id";
// $posts = $db->query($query, [':id' => $id])->fetch();
































































// class person {
//     public $name;
//     public $age;

//     public function breath(){
//         // echo 'breathing';

//         echo $this ->name . 'is breathing!';
//     }
// }


// $person = new Person();

// $person -> name = 'John Doe';
// $person -> age = 22;

// dd($person ->name);


////////////////////////////////////////

// connnect to MySQL database
// $dsn = "mysql:host=localhost;port=3306;dbname=sample;charset=utf8mb4";

// $dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";
//     // $username = 'root';
//     // $password = 'QingPa$$word98'; 

//     $pdo = new PDO($dsn);

// $statement = $pdo->prepare("select * FROM posts");

// $statement ->execute();

// $posts = $statement-> fetchAll();

// dd($posts);