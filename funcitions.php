<?php
   function sayHello($name){ // $name is parameter
       global $age;// use global to use variable outside function
       echo "Hello $name";
   }
   sayHello("Hieu Hieu <br>");
//   echo $age = 10;
   function sum($a , $b){
       return $a + $b;
   }

   echo sum(1,2); // 3

   $multiply = function ($a , $b){ // anonymous function
       return $a * $b;
   };
   echo $multiply(2,3); // 6

//   $arrowfn = fn($a , $b) => $a + $b; // arrow function

   $name = [
       "long","hieu","quang"
   ];

   var_dump(in_array("long",$name)); // check if "long" is in $name array
   array_push($name,"hien" , 'chuyen'); // add "hieu" to $name array
   array_unshift($name,"quang"); // add "hieu" to the first of $name array
   array_shift($name); // remove the first element of $name array
   array_pop($name);
   $chunked_array = array_chunk($name , 2);// remove the last element of $name array
//   print_r($name);

   $array_one = [1,2,3,4];
   $array_two = [5,6,7,8];
   $merge_array = array_merge($array_one , $array_two); // merge 2 array
//   print_r($merge_array);
//   $array_tree = [...$merge_array];// spread operator
//   print_r($array_tree);

    $a = ['name' , 'email' , 'age'];
    $b = ['long' , 'long11@gmail.com' , 18];
    $c = array_combine($a , $b); // combine 2 array to 1 array
//    print_r($c);
//    print_r(array_keys($c)); // get all keys of array
//    print_r(array_values($c)); // get all values of array
//    print_r(array_flip($c)); // flip key and value of array

   $number  = range(1,10); // create array from 1 to 10
//    print_r($number);
   $squared_number = array_map(fn($n) => $n * $n , $number); // map array
//    print_r($squared_number);
   $filtered = array_filter($number , fn($n) => $n % 2 == 0); // filter array
   print_r($filtered);



?>