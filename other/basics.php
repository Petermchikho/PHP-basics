<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<h1>
<!--    String combination-->
    <?php
    $greeting="Hello";

    echo "$greeting Peter";
    ?>
</h1>
<!-- Conditionals -->
<?php
$name="Dark Matter";
$read=false;
if($read){
    $message="You have read $name";
}else{
    $message="You have NOT read $name";
}
?>
<h1>
    <?php echo $message; ?>
    <?= $message ?>
</h1>

<h1>
    Recommend Books
</h1>
<!-- Arrays -->
<?php
$books =[
        "Do androids Dream of Electric sheep",
        "Does Peter",
        "Hail Mary",
];
?>
<ul>
    <?php
    foreach($books as $book){
        echo "<li>{$book}</li>";
    }

    ?>
    <?php foreach($books as $book) : ?>
    <li><?= $book ?></li>

    <?php endforeach; ?>


</ul>
<!-- Associative Array -->
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

//function filter($items,$key,$value) {
//   $filtered=[];
//   foreach($items as $item){
//       if($item[$key]==$value){
//           $filtered[]=$item;
//       }
//   }
//    return  $filtered;
//};
// or a lambda function

//$filterByAuthor=function ($books,$author) {
//    $filteredBooks=[];
//    foreach($books as $book){
//        if($book['author']==$author){
//            $filteredBooks[]=$book;
//        }
//    }
//    return  $filteredBooks;
//};

//Or changing the signature

function filter($items,$fn){
   $filtered=[];
   foreach($items as $item){
       if($fn($item)){
           $filtered[]=$item;
       }
   }
    return  $filtered;
}

//$filteredBooks=filter($booksnew,function($book){
//    return $book['releaseYear']>=2018;
//});
// Or built in
$filteredBooks=array_filter($booksnew,function($book){
    return $book['releaseYear']>=2018;
});
?>
<p><?= $books[0] ?></p>
<ul>

    <?php foreach($booksnew as $book) : ?>
        <?php if($book['name']==="Project Hail Mary") : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?> - By <?= $book['author'] ?>
                </a>

            </li>
        <?php endif; ?>


    <?php endforeach; ?>
</ul>
<!--Functions and Filters -->
<h1>Functions and filters</h1>
<ul>
    <?php foreach ($filteredBooks as $book) : ?>
     <li>
         <a href="<?= $book['purchaseUrl'] ?>">
             <?= $book['name'] ?>
         </a>
     </li>

    <?php endforeach; ?>
</ul>

<!-- Dedicated PHP functions -->

<!-- Lambda Functions -->
</body>
</html>