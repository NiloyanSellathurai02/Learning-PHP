<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>
<body>
    <h1>Recommend Books</h1>

    <?php 
        $books = [
           [
            "name" =>'Do Androids Dream of Electric Sheep', // Associative Array
            "author" => 'Philip K. Dick', // Give the properties a key value
            "purchaseUrl" => 'http://example.com',
            "releaseDate" => 2021,
           ],
           [
            "name" =>'Project Hail Mary',
            "author" => 'Andy Weir',
            "purchaseUrl" => 'http://google.nl',
            "releaseDate" => 2017,
           ],
           [
            "name" =>'Javascript Killer',
            "author" => 'Andy Weir',
            "purchaseUrl" => 'http://yahoo.com',
            "releaseDate" => 2023,
           ]
        ];

        function filterByAuthor($books,$author) {
            $filteredBook = [];

            foreach($books as $book){
                if($book['author'] === $author){
                    $filteredBook[] = $book;
                }
            }

            return $filteredBook;
        }



    ?>
    <ul>
        <!-- Manier 1
        <?php foreach ($books as $book) : ?>
        
            <li></li>
        
        <?php endforeach; ?>
            <br>
            
            <!-- Manier 2 -->
       <?php foreach ($books as $book){
        // echo "<li>$book</li>";
       }
       ?>
    </ul>
    <ul>
        <?php foreach (filterByAuthor($books, 'Philip K. Dick') as $book):?>
            
                <li>
                <a href="<?= $book['purchaseUrl']?>">
                        <?=$book['name']?> (<?=$book['releaseDate']?>)
                    </a>
                </li>
        <?php endforeach; ?>    
    </ul>
    <p>
    </p>
    
</body>
</html>