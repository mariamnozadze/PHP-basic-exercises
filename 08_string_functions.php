<?php

$string='hello world';

//-------------GET THE LENGTH OF A STRING
// echo strlen($string); ----> 11


//-------------FIND THE POSITION OF THE FIRST OCCURENCE OF A SUBSTRING IN A STRING
// echo strpos($string, 'o'); ----> 4


//-------------FIND THE POSITION OF THE LAST OCCURENCE OF A SUBSTRING IN A STRING
// echo strrpos($string, 'o'); ------> 7


//------------REVERSE A STRING;
// echo strrev($string); -----> dlrow olleh


//------CONVERT ALL CHARACTERS TO A LOWERCASE AND UPPERCASE
// echo strtolower($string); ----> hello world
// echo strtoupper($string);  ------> HELLO WORLD


//--------UPPERCASE THE FIRST CHARACHTER OF EACH WORD
// echo ucwords($string); -----> Hello World


//------STRING REPLACE
// echo str_replace('world', 'everyone', $string);  
// ----> hello everyone


//-------RETURN PORTION OF A STRING
// echo substr($string, 0, 5); ---> hello
// echo substr($string, 5); ---> world


//--------STARTS WITH
// if (str_starts_with($string, 'he')) {
//     echo 'YES';
// };

//--------ENDS WITH
// if (str_ends_with($string, 'ld')) {
//     echo 'YES';
// };



//  $string2 = '<script>alert(1)</script>';
//  echo $string2;   ----- shows alert 
// ----BUT IF WE DON'T WANT ALERT TO SHOW-----
// echo htmlspecialchars($string2);   
// -----> <script>alert(1)</script>



// printf('%s likes to %s', 'Brad', 'code');   ----> Brad likes to code

// printf('1+1=%d', 1+1);  ----> 1+1=2

//----IF I WANT IT TO BE A FLOAT
//  printf('1+1=%f', 1+1);   -----> 1+1=2.000000
