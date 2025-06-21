<?php
$booksnew=[
    [
        'name'=>"Do androids Dream of Electric sheep",
        'author'=>'Phili K. Dick',
        'purchaseUrl'=>'http://example.com/',
        'releaseYear'=>2019,
    ],
    [
        'name'=>"Project Hail Mary",
        'author'=>'Andy Weir',
        'purchaseUrl'=>'http://example.com/',
        'releaseYear'=>2018,
    ]
];


function filter($items,$fn){
    $filtered=[];
    foreach($items as $item){
        if($fn($item)){
            $filtered[]=$item;
        }
    }
    return  $filtered;
}

$filteredBooks=array_filter($booksnew,function($book){
    return $book['releaseYear']>=2018;
});

$heading='Home Page';


//dd($_SERVER['REQUEST_URI']);
//if($_SERVER['REQUEST_URI']==='/'){
//    echo 'bg-gray-900 text-white ';
//}else{
//    echo 'text-gray-300 ';
//}
//
//// or a tenary operator
//
//echo $_SERVER['REQUEST_URI']==='/'?'bg-gray-900 text-white ':'text-gray-300 ';

require "views/index.view.php";
