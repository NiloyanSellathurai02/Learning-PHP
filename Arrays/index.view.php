<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>
<body>
    <h1>Recommend Books</h1>
    <ul>
        <?php foreach ($filteredBooks as $book):?>
            
                <li>
                <a href="<?= $book['purchaseUrl']?>">
                        <?=$book['name']?> (<?=$book['releaseDate']?>)
                    </a>
                    (<?= $book['author'] ?>)
                </li>
        <?php endforeach; ?>    
    </ul>
    <p>
    </p>
    
</body>
</html>