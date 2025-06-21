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
$heading='Contact Us';
require "views/index.view.php";
