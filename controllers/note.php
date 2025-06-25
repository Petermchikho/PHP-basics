<?php
$config=require "config.php";
$db = new Database($config['database']);
$heading='Note Page';
$id=$_GET['id'];
$note=$db->query("SELECT * FROM notes WHERE id= :id",[
    'id'=>$id]
)->findOrFail();

if(! $note){
    abort();
}
$currentUserId=1;

authorise($note['user_id']===$currentUserId,Response::FORBIDDEN);

require "views/note.view.php";