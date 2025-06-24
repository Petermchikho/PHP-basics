<?php
require "functions.php";
require "Database.php";
require "router.php";

// Connect to the database and execute a query


// connect to our MySQL database


//dd($posts);
$config=require "config.php";
$db = new Database($config['database']);


//dd($_GET);

//$posts=$db->query('select * from posts')->fetchAll();
$post=$db->query("select * from posts where id = :id",['id'=>$_GET['id']])->fetch();

//foreach ($posts as $post) {
//    echo "<h1>{$post['title']}</h1>";
//}
echo "<h1>{$post['title']}</h1>";

dd($_GET['id']);

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