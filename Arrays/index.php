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
            "Do Androids Dream of Electric Sheep" , 
            "The Langoliers",
            "Hail Mary" 
        ];
    ?>
    <ul>
        <!-- Manier 1 -->
        <?php foreach ($books as $book) : ?>
        
            <li><?= $book ?></li>
        
        <?php endforeach; ?>
            <br>
            
            <!-- Manier 2 -->
       <?php foreach ($books as $book){
        echo "<li>$book</li>";
       }
       ?>
    </ul>
</body>
</html>