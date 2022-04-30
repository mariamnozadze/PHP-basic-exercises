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
        // }
?>