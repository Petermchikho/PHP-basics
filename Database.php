<?php
class Database{
public $connection;
public $statement;
public function  __construct($config)
{

    $dsn ='mysql:'.http_build_query($config,'',';');

    $this->connection= new PDO($dsn, $config['user'], $config['password'],[
        PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC
    ]);
}
public function query($sql,$params=[])
{


    $this->statement=$this->connection->prepare($sql);

    $this->statement->execute($params);

    return $this;

}
public function get(){
    return $this->statement->fetchAll();
}
public function find(){
    return $this->statement->fetch(PDO::FETCH_ASSOC);

}
public function findOrFail(){
    $result=$this->find();
    if(! $result){
        abort(404);
    }else{
        return $result;
    }
}
}
