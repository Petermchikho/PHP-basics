<?php
require "functions.php";
//require "router.php";

// connect to our MySQL database
$dsn = 'mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4';
$pdo=new PDO($dsn, 'root', '2001Pboy@');

$statement=$pdo->prepare('select * from posts');

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

//dd($posts);

foreach ($posts as $post) {
    echo "<h1>{$post['title']}</h1>";
}

//class Person{
//    public $name;
//    public $age;
//    public function breathe()
//    {
//        echo $this->name . ' is breathe';
//    }
//}
//$person = new Person();
//$person->name = "John Doe";
//$person->age = 25;
//
////dd($person->name);
//$person->breathe();