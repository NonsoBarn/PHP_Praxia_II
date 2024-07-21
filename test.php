<?php
$name = "Harry Potter";
$read = false; 
  
    // if ($read === true){
    //     echo "You have read" . " " . $name;
    // }else{
    //     echo "You have not read" . " " . $name;
    // }



    if ($read){
        $message = "You have read $name";
    }else{
        $message = "You have not read $name";
    }


     $message
?>


<?php 

$books = [
    "book1",
    "book2",
    "book3"
]

?>


<ul>
    <?php 
    foreach ($books as $book){
        echo "<li>" . $book . "</li>";
    } ?>
</ul>



<?php
$objectBooks = [
    [
        'name' => 'book1',
        'author' => 'Sam Hooks',
        'link' => 'www.example.com',
        'releaseYear' => 1924,
    ],
    [
        'name' => 'book2',
        'author' => 'John Snow',
        'link' => 'www.example.com',
        'releaseYear' => 2024,
    ],
]; 

// function filter($items, $key, $value) {
    function filter($items, $fn) {
    $filteredItems = [];

    // foreach($items as $item){
    //     if($item[$key] === $value) {
    //         $filteredItems[] = $item;
    //     }
    // }

    foreach($items as $item){
        if($fn($item)) {
            $filteredItems[] = $item;
        }
    }

      return $filteredItems;
   
}

// $filteredBooks = filter($objectBooks, 'author', 'John Snow');
$filteredBooks = filter($objectBooks, function ($book){
    return $book['releaseYear'] <= 2000;
});

require "views/test
.view.php";
?>




