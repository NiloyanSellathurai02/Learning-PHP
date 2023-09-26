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

        function filter($items,$function) {
            $filteredItems = [];

            foreach($items as $item){
                if($function($item)){
                    $filteredItems[] = $item;
                }
            }

            return $filteredItems;
        }




        $filteredBooks = array_filter($books , function ($book){
            return $book['author'] === 'Andy Weir';
        });

        require 'index.view.php';
  