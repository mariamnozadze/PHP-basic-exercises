<?php 

// for ($x=0; $x <= 10; $x++) {
//     echo $x;
// }
//012345678910



// for ($x=0; $x <= 10; $x++) {
//     echo 'Number ' . $x . '<br>';
// }
// Number 0
// Number 1
// Number 2
// Number 3
// Number 4
// Number 5
// Number 6
// Number 7
// Number 8
// Number 9
// Number 10



// $x = 1;

// while ($x <= 5) {
//     echo 'Number ' . $x . '<br>';
//     $x++;
// };

// Number 1
// Number 2
// Number 3
// Number 4
// Number 5





// $x = 1;

// do {
//     echo 'Number ' . $x . '<br>';
//     $x++;
// } while ($x <=5);

// Number 1
// Number 2
// Number 3
// Number 4
// Number 5

//BUT --------------

//  $x = 6;

//  do {
//      echo 'Number ' . $x . '<br>';
//      $x++;
//  } while ($x <=5);

 //Number 6




$posts = ['first post', 'second post', 'third post'];

// for ($x = 0; $x < count($posts); $x++){
//     echo $posts[$x];
// };
//------------- same---------------     
// foreach($posts as $post) {
//     echo $post;
// };


// foreach($posts as $index => $post) {
//     echo $index . ' - ' . $post . '<br>';
// }
// 0 - first post
// 1 - second post
// 2 - third post





// $person = [
//     'first_name' => 'brad',
//     'last_name' => 'traversy',
//     'email' => 'brad@gmail.com'
// ];

// foreach($person as $key => $value) {
//     echo "$key - $value <br>";
// }
// first_name - brad
// last_name - traversy
// email - brad@gmail.com
