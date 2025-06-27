<?php
require 'Validator.php';

$config= require('config.php');
$heading="Create Note";
$db=new Database($config['database']);
//dd(Validator::email('peter@gmail.com'));
if($_SERVER['REQUEST_METHOD']=="POST"){
//    dd($_POST);
    $errors=[];



    if(! Validator::string($_POST['body'],1,10)){
        $errors['body']="The body must be not more than 10 characters.";
    };



    if(empty($errors)){
        $db->query('INSERT INTO notes(body,user_id) VALUES(:body,:user_id)',[
            'body'=>$_POST['body'],
            'user_id'=>1
        ]);

    }

}

require "views/notes/create.view.php";