<?php 

    $fruits = ['apple', 'orange', 'pear'];

    //GET LENGTH
    //echo count($fruits);  ----> 3


    // SEARCH ARRAY
    //var_dump(in_array('apple', $fruits));  ----> bool(true)



    // $fruits[] = 'grape';
    //array_push($fruits, 'blueberry'); ----> ADDS LAST
    //array_unshift($fruits, 'mango'); -----> ADDS FIRST

    //array_pop($fruits); -----> REMOVES LAST
    //array_shift($fruits); ---> REMOVES FIRST

    //unset($fruits[2]); ----> REMOVES SPECIFIC ELEMENT

    //print_r($fruits);  //  -------> 
    // //{
    //     0: "mango",
    //     1: "apple",
    //     2: "orange",
    //     3: "pear",
    //     4: "blueberry"
    //     }


    //SPLIT INTO CHUNKS OF 2
        // $chuncked_array = array_chunk($fruits, 2);
        // print_r($chuncked_array);

        // 0: {
        //     0: "apple",
        //     1: "orange"
        //  },
        //  1: {
        //     0: "pear"
        //}


    ///CONCAT, MERGE ARRAYS
    // $arr1 = [1, 2, 3];
    // $arr2 = [4, 5, 6];

    // $arr3 = array_merge($arr1, $arr2);
    // $arr4 = [...$arr1, ...$arr2];  ----> spread opearator works in php too

    // print_r($arr3); -------> 
    // {
    //     0: "1",
    //     1: "2",
    //     2: "3",
    //     3: "4",
    //     4: "5",
    //     5: "6"
    // }



    //COMBINE ARRAYS
    $a = ['green', 'red', 'yellow'];
    $b = ['avocado', 'apple', 'banana'];
    
    $c = array_combine($a, $b);

    // print_r($c); ----------->
    // {
    //     green: "avocado",
    //     red: "apple",
    //     yellow: "banana"
    // }
    


    // $keys = array_keys($c);

    // print_r($keys);  ----->
    // {
    //     0: "green",
    //     1: "red",
    //     2: "yellow"
    // }


    // $flipped = array_flip($c);

    // print_r($flipped);  ------> 
    // {
    //     avocado: "green",
    //     apple: "red",
    //     banana: "yellow"
    // }




      $numbers = range(1, 10);

    //  print_r($numbers); ----->
    // {
    //     0: "1",
    //     1: "2",
    //     2: "3",
    //     3: "4",
    //     4: "5",
    //     5: "6",
    //     6: "7",
    //     7: "8",
    //     8: "9",
    //     9: "10"
    //   }


//     $newNumbers = array_map(function($number) {
//         return "Number ${number}";
//     }, $numbers);

//     print_r($newNumbers); --------->     
// {
//     0: "Number 1",
//     1: "Number 2",
//     2: "Number 3",
//     3: "Number 4",
//     4: "Number 5",
//     5: "Number 6",
//     6: "Number 7",
//     7: "Number 8",
//     8: "Number 9",
//     9: "Number 10"
//  }



// $lessThan5 = array_filter($numbers, function($number) {
//  return $number <= 5;
// });

// print_r($lessThan5);   ----->
// {
//     0: "1",
//     1: "2",
//     2: "3",
//     3: "4",
//     4: "5"
// }



//SUM OF ALL NUMBERS
// $sum = array_reduce($numbers, function($carry, $number) {
//     return $carry + $number;
// });

// var_dump($sum); ------> int(55)


?>