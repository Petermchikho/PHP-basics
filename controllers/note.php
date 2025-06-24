<?php
$config=require "config.php";
$db = new Database($config['database']);
$heading='Note Page';
$id=$_GET['id'];
$note=$db->query("SELECT * FROM notes WHERE id= :id",['id'=>$id])->fetch(PDO::FETCH_ASSOC);


require "views/note.view.php";