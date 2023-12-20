<?php
   echo "Test ";
   $name = 'Nguyễn Hải Long';
   $age = 18;
   echo $name . " " . $age . "<br>"; // . is concat
   echo "$name và $age"; // use "" to print variable
   var_dump($name); // check type of variable
   const PI = 3.14; // define constant
//   echo PI;

//   $date_time = date("h"); // get current time
//   echo $date_time;

   $comments = [
     "good" , "bad" , "normal"
   ];

   if(empty($comments)){
       echo "empty";
   }else{
       echo "not empty";
   }

   $fist_comment = isset($comments[0]) ? $comments[0] : "empty"; // check if $comments[0] is null then return "empty"




    // define array
      $arr = array(1,2,3,4,5);
      foreach ($arr as $value) {
          if($value % 2 == 0){
              echo $value . "<br>";
          }

      }

      foreach ($comments as $index => $comment) { // index is key of array
          echo $index . $comment . "<br>";
      }

      $person = [
              'full_name' => 'Nguyễn Hải Long',
              'age' => 18,
              'address' => 'Hà Nội'
      ];

      foreach ($person as $key => $value) {
          echo $key . " " . $value . "<br>";
      }





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
     <h1> <?php echo "Hello" ?></h1>
</body>
</html>