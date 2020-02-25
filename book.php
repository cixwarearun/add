<?php
   $books = [
       [
           'name' => 'Harry potter',
           'author' => 'Arun Bastola',
           'price' => 1000
       ],
       [
        'name' => 'Lord of the rings',
        'author' => 'Sibu Dhital',
        'price' => 2000
       ],
       [
        'name' => 'The Mummy',
        'author' => 'Anita Shrestha',
        'price' => 1000
       ],
       [
        'name' => 'The Hobbit',
        'author' => 'Diken Khadka',
        'price' => 500
       ],
       [
        'name' => 'The Green Mile',
        'author' => 'Binod Baral',
        'price' => 5000
       ],
       [
        'name' => 'The Dark Fate',
        'author' => 'Bibek Bhandari',
        'price' => 700
       ]
       ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="tailwind.css">
</head>
<body>
    <div class="mx-auto ml-20 mr-16 mt-10">

   
      <table class="border-4 border-solid m-auto w-full h-full mr-10  ">
            <tr class="border-4 " >
                <th class="">Books</th>
                <th class="border-4" >Authors</th>
                <th >Price</th>
            </tr>
            <?php
            foreach($books as $book){
                   echo '<tr >';
                
                    echo '<td class=" border-4 text-center "  >'.$book['name'].'</td>';
                    echo '<td class="border-4 text-center" >'.$book['author'].'</td>';
                    echo '<td class=" text-center border-4">'.$book['price'].'</td>';
               
                echo '</tr>';
            }
            ?>
      </table>
      </div>
    
</body>
</html>
