<?php
  echo "String funcitions php";
  echo "<br>";

  $full_name = "Nguyễn Hải Long";
  echo "length : " .strlen($full_name) . "<br>"; // get length of string
  echo "word count : " .str_word_count($full_name) . "<br>"; // get word count of string
  echo "reverse : " .strrev($full_name) . "<br>"; // reverse string
  echo "position : " .strpos($full_name , "Long") . "<br>"; // get position of string
  echo "replace : " .str_replace("Long" , "Hieu" , $full_name) . "<br>"; // replace
  echo "repeat : " .str_repeat($full_name , 3) . "<br>"; // repeat string
  echo "trim : " .trim("   Long   ") . "<br>"; // trim string
  echo "upper : " .strtoupper($full_name) . "<br>"; // upper string
  echo "lower : " .strtolower($full_name) . "<br>"; // lower string
  if(str_starts_with($full_name , "Nguyễn")){
    echo "start with Nguyễn <br>";
  }
  echo "<h1 style='color: aqua'> Html String </h1>"; // html string
//  echo "<script>alert('ok Hieu nhe')</script>";// render javascript
  echo htmlspecialchars("<h1 style='color: aqua'> Html String </h1>"); //not render html string
  printf("Hello %s <br>" , "Hieu"); // print string
  printf('pi = %f <br>' , 3.14); // print float
  printf('age = %d <br>' , 18); // print int


