<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Hello World!!</h1>

<h1><?php
$greeting = "Hello";
$target = "World";
$phrase = $greeting . " " . $target;
echo $phrase;
?></h1>




<ul>
<?php 
    foreach ($filteredBooks as $book) {
        
            echo "<li>
                <a href='{$book['link']}'> {$book['name']} by 
                {$book['author']} released in {$book['releaseYear']}
                </a></li>";
       
    }

    ?>
</ul>



</body>
</html>