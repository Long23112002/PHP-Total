<?php
 echo 'Cokies php';
 echo '<br>';
 setcookie('name' , 'Hieu' , time() + 3600); // name : key , Hieu : value , time() + 3600 : time to expire
 setcookie("user" , "hieu123" , time() + 3600 , "/"); // "/" : path
 if(isset($_COOKIE['name'])) {
     echo $_COOKIE['name'].'<br>';
 }

 if(isset($_COOKIE['user'])) {
     echo $_COOKIE['user'].'<br>';
 }
 setcookie("user" , "" , time() - 3600 , "/" ); // delete cookie
 setcookie("name" , "" , time() - 3600 , "/" );